<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookstores extends Model
{
    use HasFactory;
    protected $table='bookstore';

    protected $fillable = [
		'bookstore_name',	
		'information'
	];

	public function book() {
		return $this->hasMany(
			Books::class , 
			'bookstore_id' , 'id'
		);
	}
}
