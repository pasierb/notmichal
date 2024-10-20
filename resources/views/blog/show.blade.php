<x-landing-layout>
    <x-slot name="seo">
        {!! seo()->for($blogPost) !!}
    </x-slot>

    <div class="flex justify-center mx-auto">
        @if ($blogPost->cover_image_path)
            <img src="{{ asset($blogPost->cover_image_path) }}" alt="{{ $blogPost->title }}"
                class="w-full max-w-2xl aspect-video object-cover rounded-lg mb-8">
        @endif
    </div>
    <div class="prose mx-auto px-4">
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
                @php
                    $content = file_get_contents(base_path('posts/' . $blogPost->content_path));
                    $parsedContent = Spatie\YamlFrontMatter\YamlFrontMatter::parse($content);
                    $markdownContent = $parsedContent->body();
                @endphp
                {!! Illuminate\Support\Str::markdown($markdownContent, ['html_input' => 'allow']) !!}
            @endif
        </div>

        <div class="mt-24 text-sm text-center">
            <p>
                If you enjoyed this post, consider subscribing to my newsletter for more insights on indie hacking,
                marketing, and product development. Every two weeks you get a summary of what's happening here and some
                dad jokes.
            </p>

            <iframe src="https://notmichal.substack.com/embed" width="480" height="150"
            class="mx-auto"
                frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</x-landing-layout>
