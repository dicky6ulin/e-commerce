<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
	use SendsPasswordResetEmails;

	/**
	 * Show forgot password reset request form
	 *
	 * @return void
	 */
	public function showLinkRequestForm()
	{
		if (property_exists($this, 'linkRequestView')) {
			return view($this->linkRequestView);
		}
		return $this->loadTheme('auth.password.email');
	}
}
