<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
	protected $table='order';
	
	protected $fillable = [
		'cus_name'	,
		'address'	,
		'phone'	,
		'email',	
		'payment',	
		'status'
	];

	public function users() {
		return $this->hasMany(
			Users::class , 
			'cus_name' , 'id'
		);
	}
}
