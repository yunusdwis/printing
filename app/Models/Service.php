<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_service',
        'main_image',
        'description',
        'additional_words',
        'additional_images',
        'price',
    ];

    protected $casts = [
        'additional_images' => 'array', // Untuk memastikan JSON dikonversi ke array
    ];
}
