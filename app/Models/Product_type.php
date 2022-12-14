<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    use HasFactory;
    protected $table = 'type_products';

    public function product() {
        // return $this->hasMany('App\Product', 'id_type', 'id');
        return $this->hasMany(Product::class, 'id_type', 'id');
    }
}
