<x-blog-layout>
    @if(count($posts))
        @foreach($posts as $post)
            <x-post-list-item :post="$post"/>
        @endforeach

        <div>
            {{ $posts->links() }}
        </div>
    @else
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                No data yet.
            </div>
        </div>
    @endif

    <x-slot name="side">
        <a href="{{ route('home') }}" class="w-full justify-center mb-4 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
            Create Post
        </a>
        <x-side-bar/>
    </x-slot>
</x-blog-layout>
