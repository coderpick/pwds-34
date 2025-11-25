<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'title', 'slug', 'description', 'image', 'views', 'is_featured', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
