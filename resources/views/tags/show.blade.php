<x-blog-layout>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-3">
        <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-bold">Tag: {{ $tag }}</h1>
                <p>{{ count($posts) }} posts</p>
            </div>
        </div>
    </div>

    @foreach($posts as $post)
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="p-6 text-gray-900 dark:text-gray-100 prose space-y-6">
                <h1 class="not-prose">
                    <a href="{{ route('post.show', $post->slug) }}" class="hover:text-blue-500 transition-colors duration-100">{{ $post->title }}</a></h1>
                <div>{{ $post->teaser }}</div>

                <x-post-meta :post="$post" />
            </div>
        </div>
    @endforeach

    <x-slot name="side">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                Side
            </div>
        </div>
    </x-slot>
</x-blog-layout>
