<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'message',
        'location',
        'formatted_address',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
