<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
	protected $fillable = [

	];

	public function type()
	{
		return $this->belongsTo(AnimalTypes::class);
	}
}
