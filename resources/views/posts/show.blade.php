<x-blog-layout>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-3">
        <div class="p-6 text-gray-900 dark:text-gray-100 prose space-y-6">
            <h1 class="text-center border-b pb-3">{{ $post->title }}</h1>

            <div>{{ $post->contents }}</div>

            <x-post-meta :post="$post" />
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
