<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
	/**
	 * Set default permission
	 *
	 * @return array
	 */
	public static function defaultPermissions()
	{
		return [
			'view_users',
			'add_users',
			'edit_users',
			'delete_users',

			'view_roles',
			'add_roles',
			'edit_roles',
			'delete_roles',

			'view_products',
			'add_products',
			'edit_products',
			'delete_products',

			'view_orders',
			'add_orders',
			'edit_orders',
			'delete_orders',

			'view_categories',
			'add_categories',
			'edit_categories',
			'delete_categories',

			'view_attributes',
			'add_attributes',
			'edit_attributes',
			'delete_attributes',

			'view_shipments',
			'add_shipments',
			'edit_shipments',
			'delete_shipments',

			'view_slides',
			'add_slides',
			'edit_slides',
			'delete_slides',
		];
	}
}
