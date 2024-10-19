<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;


class BlogPost extends Model
{
    use HasSEO;

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

    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: $this->title,
            description: $this->excerpt,
            image: $this->cover_image_path ? asset($this->cover_image_path) : null,
        );
    }

    protected $fillable = [
        'title',
        'slug',
        'content_path',
        'published_at',
        'cover_image_path',
        'excerpt',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
