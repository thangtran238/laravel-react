<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table="products";

    public function product_type(){
        return $this->belongsTo('App\Type_Product');
    }
    public function bill_detail(){
        return $this->hasMany('App\BillDetail');
    }
    public function comment(){
        return $this->hasMany('App\Comment');
    }
    public function wishlist(){
        return $this->belongsTo('App\Product');
    }
}
