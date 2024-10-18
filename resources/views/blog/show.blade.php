<x-landing-layout>
    <div class="flex justify-center mx-auto">
        @if ($blogPost->cover_image_path)
            <img src="{{ asset($blogPost->cover_image_path) }}" alt="{{ $blogPost->title }}"
                class="w-full max-w-2xl aspect-video object-cover rounded-lg mb-8">
        @endif
    </div>
    <div class="prose mx-auto">
        <h1 class="text-5xl font-bold">{{ $blogPost->title }}</h1>
        <div class="flex items-center gap-x-4 text-normal">
            <time datetime="{{ $blogPost->published_at }}" class="text-gray-500">
                {{ $blogPost->published_at->format('M d, Y') }}
            </time>
            <a href="#"
                class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
        </div>
        <div>
            @if ($blogPost->content_path)
                {!! Illuminate\Support\Str::markdown(file_get_contents(base_path('posts/' . $blogPost->content_path))) !!}
            @endif
        </div>
    </div>
</x-landing-layout>
