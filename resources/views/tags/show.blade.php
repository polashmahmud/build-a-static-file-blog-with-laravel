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
        <a href="{{ route('home') }}" class="w-full justify-center mb-4 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
            Back
        </a>
        <x-side-bar />
    </x-slot>
</x-blog-layout>
