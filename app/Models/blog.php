<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog'; // Nama tabel
    protected $fillable = [
        'gambar', 'judul', 'isi_blog', 'motivasi', 'tag', 'like', 'comment', 'view'
    ]; // Kolom yang dapat diisi secara massal
}
