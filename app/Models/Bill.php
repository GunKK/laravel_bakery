<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bills';
    
    public function billDetail() {
        return $this->hasMany('App\Bill_detail', 'id_bill', 'id');
    }

    public function customer() {
        return $this->belongsTo('App\Customer', 'id_customer', 'id');
    }
}
