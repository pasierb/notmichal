<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class BlogPostList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Collection $blogPosts)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-post-list', ['blogPosts' => $this->blogPosts]);
    }
}
