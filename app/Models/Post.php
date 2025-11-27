<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
     use HasFactory;
    protected $fillable = [
        'user_id', 'title', 'slug', 'description', 'image', 'views', 'is_featured', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
