<x-landing-layout>
    <h1 class="text-4xl font-bold text-center">Thoughts & ramblings</h1>
    <p class="text-lg text-center">
        aka the blog
    </p>

    <x-blog-post-list :blogPosts="$blogPosts->collect()" />
    {{ $blogPosts->links() }}
</x-landing-layout>
