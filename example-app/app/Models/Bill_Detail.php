<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill_Detail extends Model
{
    use HasFactory;
    protected $table='bill_detail';
    public function bill_detail(){
        return $this->hasMany('App\BillDetail');
        }
}
