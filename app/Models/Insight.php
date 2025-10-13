<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Insight extends Model
{
    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'author', 'published_at'
    ];
     protected $dates = ['published_at'];
     protected $casts = [
    'published_at' => 'datetime',
];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getExcerptAttribute($value)
    {
        return $value ?: Str::limit(strip_tags($this->content), 150);
    }
}
