<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'photo',
        'price',
        'category_id',
        'size',
        'color',
        'tag',
        'description',
        'stock',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

