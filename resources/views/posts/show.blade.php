<x-blog-layout>
    <x-post-list-item :post="$post" />


    <x-slot name="side">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                Side
            </div>
        </div>
    </x-slot>
</x-blog-layout>
