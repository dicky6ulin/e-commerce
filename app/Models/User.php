<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
	use Notifiable, HasRoles;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name', 'last_name', 'email', 'phone', 'password', 'company', 'address1', 'address2', 'province_id', 'city_id', 'postcode',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	/**
	 * Define relationship with the Product
	 *
	 * @return void
	 */
	public function products()
	{
		return $this->hasMany('App\Models\Product');
	}

	/**
	 * Define relationship with the Favorite
	 *
	 * @return void
	 */
	public function favorites()
	{
		return $this->hasMany('App\Models\Favorite');
	}
}
