<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
	protected $fillable = [
		'type_id',
		'measurement_id',
		'count',
		'bought_date',
		'bought_price',
		'sold_date',
		'sold_price',
		'sold_weight',
		'death_date',
		'birth_date',
	];

	public function type()
	{
		return $this->belongsTo(AnimalTypes::class);
	}

	public function measurement()
	{
		return $this->belongsTo(Measurement::class);
	}
}
