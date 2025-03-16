<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	public $timestamps = false;

	protected function casts()
	{
		return [
			'last_updated' => 'datetime',
		];
	}
}
