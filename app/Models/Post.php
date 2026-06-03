<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'image',
        'short_description',
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_published',
    ];

    // تحويل boolean
    protected $casts = [
        'is_published' => 'boolean',
    ];

    // العلاقة مع الكاتجوري
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // العلاقة مع الفقرات
    public function paragraphs()
    {
        return $this->hasMany(PostParagraph::class)
            ->orderBy('order');
    }
}