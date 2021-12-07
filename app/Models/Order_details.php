<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    protected $table='order_detail';

    protected $fillable = [
		'order_id',	
		'book_id',	
		'quantity',	
		'price'
	];

	public function Order() {
		return $this->belongsTo(
			Orders::class , 
			'order_id' , 'id'
		);
	}
	public function book() {
		return $this->belongsTo(
			Books::class , 
			'book_id' , 'id'
		);
	}
	public function order() {
		return $this->hasMany(
			Books::class , 
			'order_id' , 'id'
		);
	}
}
