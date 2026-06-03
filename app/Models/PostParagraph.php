<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostParagraph extends Model
{
    protected $fillable = [
        'post_id',
        'content',
        'image',
        'order',
    ];

    // العلاقة مع البوست
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}