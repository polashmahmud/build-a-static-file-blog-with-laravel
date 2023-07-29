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
        <x-side-bar/>
    </x-slot>
</x-blog-layout>
