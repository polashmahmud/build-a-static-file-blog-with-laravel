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
        <x-post-list-item :post="$post" />
    @endforeach

    <x-slot name="side">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                Side
            </div>
        </div>
    </x-slot>
</x-blog-layout>
