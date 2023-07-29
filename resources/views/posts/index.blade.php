<x-blog-layout>

    @forelse($posts as $post)
        {{ $post }}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="p-6 text-gray-900 dark:text-gray-100 prose space-y-6">
                <h1 class="not-prose"><a href="#" class="hover:text-blue-500 transition-colors duration-100">Blog
                        Title</a></h1>
                <div>{{ $post->teaser }}</div>

                <div><strong>{{ $post->author }}</strong> / {{ $post->date }}</div>
            </div>
        </div>
    @empty
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                No data yet.
            </div>
        </div>
    @endforelse

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            Content
        </div>
    </div>

    <x-slot name="side">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                Side
            </div>
        </div>
    </x-slot>
</x-blog-layout>
