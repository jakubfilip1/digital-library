<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Strona główna') }}
        </h2>
    </x-slot>

    @php
        // Liczba użytkowników
        $userCount = \App\Models\User::count();

        // Całkowita liczba książek
        $bookCount = \App\Models\Book::count();

        // Liczba unikalnych autorów
        $authorCount = \App\Models\Book::distinct('author')->count('author');

        // Pobieranie losowych książek
        $randomBooks = \App\Models\Book::inRandomOrder()->take(4)->get();
    @endphp

        <!-- Reklama -->
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-yellow-400 to-yellow-600 dark:from-yellow-700 dark:to-yellow-900 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    <span class="text-3xl font-extrabold">Specjalna Oferta!</span>
                    <p class="mt-4 text-lg">
                        Zdobądź 50% zniżki na pierwszą subskrypcję!
                        <a href="{{ route('subscription.index') }}" class="text-blue-700 dark:text-blue-400 underline font-bold hover:text-blue-900 dark:hover:text-blue-200">Kliknij tutaj, aby dowiedzieć się więcej</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statystyki -->
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg text-center p-6">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100">Liczba użytkowników</h3>
                <p class="text-5xl font-extrabold text-yellow-500 mt-4">{{ $userCount }}</p>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg text-center p-6">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100">Całkowita liczba książek</h3>
                <p class="text-5xl font-extrabold text-yellow-500 mt-4">{{ $bookCount }}</p>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg text-center p-6">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100">Liczba autorów</h3>
                <p class="text-5xl font-extrabold text-yellow-500 mt-4">{{ $authorCount }}</p>
            </div>
        </div>
    </div>

    <!-- Polecane książki -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-6">Polecane książki</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($randomBooks as $book)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg p-4">
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('images/' . $book->image) }}" alt="{{ $book->title }}" class="w-40 h-60 rounded-lg mb-4">
                            <div class="text-center">
                                <h4 class="text-xl font-bold text-gray-900 dark:text-gray-100">{{ $book->title }}</h4>
                                <p class="text-gray-700 dark:text-gray-300">{{ $book->author }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
