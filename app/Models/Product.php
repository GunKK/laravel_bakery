<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name', 'description', 'price_base', 'price_sale', 'images', 'active', 'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
