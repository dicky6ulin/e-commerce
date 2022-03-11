<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
	use ResetsPasswords;

	/**
	 * Where to redirect users after resetting their password.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';


	/**
	 * Show reset password form
	 *
	 * @param Request $request request object
	 * @param string  $token   reset password token
	 *
	 * @return void
	 */
	public function showResetForm(Request $request, $token = null)
	{
		if (is_null($token)) {
			return $this->getEmail();
		}

		$this->data['email'] = $request->input('email');
		$this->data['token'] = $token;
		
		return $this->loadTheme('auth.password.reset', $this->data);
	}
}
