<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param array $data user data
	 *
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make(
			$data,
			[
				'first_name' => ['required', 'string', 'max:255'],
				'last_name' => ['required', 'string', 'max:255'],
				'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
				'password' => ['required', 'string', 'min:8', 'confirmed'],
			]
		);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param array $data user data
	 *
	 * @return \App\User
	 */
	protected function create(array $data)
	{
		return User::create(
			[
				'first_name' => $data['first_name'],
				'last_name' => $data['last_name'],
				'email' => $data['email'],
				'password' => Hash::make($data['password']),
			]
		);
	}

	/**
	 * Show register form
	 *
	 * @return void
	 */
	public function showRegistrationForm()
	{
		if (property_exists($this, 'registerView')) {
			return view($this->registerView);
		}
		return $this->loadTheme('auth.register');
	}
}
