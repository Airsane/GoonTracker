<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoonReport extends Model
{
	public $timestamps = false;

	protected function casts(): array
	{
		return [
			'reported_when' => 'datetime',
		];
	}

	public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function location(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(Location::class);
	}
}
