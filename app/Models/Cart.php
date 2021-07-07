<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	use HasFactory;

	protected $attributes = [
		'id',
		'reference',
		'creation_date',
	];

	public static $rules = [
		'reference' => 'required|string',
	];
}
