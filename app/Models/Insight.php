<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Insight extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'author',
        'published_at',
        'category',
        'read_time',
        'image',
        'views',
    ];

    protected $dates = ['published_at'];

    protected $casts = [
        'published_at' => 'datetime',
        'views' => 'integer',
    ];

    // Automatically use 'slug' for route model binding
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Auto-generate excerpt if not provided
    public function getExcerptAttribute($value)
    {
        return $value ?: Str::limit(strip_tags($this->content), 150);
    }

    // Optional: generate read time based on word count
    public function getReadTimeAttribute($value)
    {
        if ($value) return $value;
        $wordCount = str_word_count(strip_tags($this->content));
        return ceil($wordCount / 200); // avg 200 words per min
    }

    // Image accessor (full URL)
public function getImageUrlAttribute()
{
    // If stored as full URL, just return it
    if ($this->image && str_starts_with($this->image, 'http')) {
        return $this->image;
    }

    // Otherwise fallback to local storage
    return $this->image 
        ? asset('storage/' . $this->image) 
        : asset('images/default-insight.jpg');
}

}
