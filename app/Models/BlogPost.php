<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    /**
     * Scope a query to only include published posts.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
                     ->where('published_at', '<=', now())
                     ->orderBy('published_at', 'desc');
    }

    protected $fillable = [
        'title',
        'slug',
        'content_path',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
