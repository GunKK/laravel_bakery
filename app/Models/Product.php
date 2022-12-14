<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function productType() {
        return $this->belongsTo(Product_type::class, 'id_type', 'id');
    }
 
    public function billDetail() {
        return $this->hasMany(Bill_detail::class, 'id_product', 'id');
    }
}
