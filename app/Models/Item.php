<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	use HasFactory;

	protected $attributes = [
		'id',
		'reference',
		'name',
		'qty',
		'unitary_value',
	];

	public static $rules = [
		'reference' => 'required|string',
		'name' => 'required|string',
		'qty' => 'required|integer',
		'unitary_value' => 'required|integer',
	];
}
