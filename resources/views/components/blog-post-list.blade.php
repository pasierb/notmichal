<div {{ $attributes->merge(['class' => '']) }}>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                @foreach ($blogPosts as $blogPost)
                    <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                        <div
                            class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-video lg:w-64 lg:shrink-0 overflow-hidden">
                            @if ($blogPost->cover_image_path)
                                <img src="{{ asset($blogPost->cover_image_path) }}" alt="{{ $blogPost->title }}"
                                    class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                            @else
                                <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                                    alt=""
                                    class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                            @endif
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                            <a href="{{ route('blog.show', $blogPost->slug) }}">
                                <span class="absolute inset-0"></span>
                            </a>
                        </div>
                        <div>
                            <div class="flex items-center gap-x-4 text-md">
                                <time datetime="{{ $blogPost->published_at }}" class="text-gray-500">
                                    {{ $blogPost->published_at->format('M d, Y') }}
                                </time>
                                <!-- TODO: Add tags -->
                            </div>
                            <div class="group relative max-w-xl">
                                <h3
                                    class="mt-3 text-2xl font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="{{ route('blog.show', $blogPost->slug) }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $blogPost->title }}
                                    </a>
                                </h3>
                                <div class="mt-5 text-md leading-6 text-gray-600 prose">
                                    {!! Illuminate\Support\Str::markdown($blogPost->excerpt) !!}
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</div>
