<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $book->title }}, <i>{{ $book->author }}</i>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <iframe id="pdfIframe" style="width: 100%; height: 1000px;" src="{{ route('books.pdf', $book->id) }}"></iframe>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
