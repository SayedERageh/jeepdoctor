<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'image',
        'is_active',
        'icon',
        'meta_keywords',
        'meta_description'

    ];
    protected $casts = [
    'meta_keywords' => 'array',
];
}