<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('navigation.Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($books as $book)
                        <div onclick="window.location='{{ route('books.show', $book->id) }}';" class="cursor-pointer w-40 bg-white dark:bg-gray-800 border-r border-l border-t border-b border-gray-100 dark:border-gray-700" style="height: 230px; background-repeat: no-repeat; background-size: contain; background-position: center; background-image: url({{ asset('images/' . $book->image) }})"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
