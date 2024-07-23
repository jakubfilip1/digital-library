<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Biblioteka') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if (!Auth::user()->subscribed('default'))
                    <div class="p-6 text-gray-900 dark:text-gray-100 text-xl flex items-center justify-between bg-gradient-to-r from-gray-700 via-gray-900 to-black border border-gray-600 rounded-lg shadow-lg mb-6">
                        <div class="flex items-center">
                            <svg class="w-10 h-10 text-yellow-400 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-9a9 9 0 11-6.165-8.533M12 12v.01M15 13h.01M9 13h.01M6 16h.01M18 16h.01M15 19h.01M9 19h.01M12 22h.01M12 12v.01"></path>
                            </svg>
                            <span class="text-yellow-400 font-bold text-2xl">Kup subskrypcję tutaj:</span>
                        </div>
                        <a href="{{ route('subscription.index') }}" class="text-gray-900 underline font-bold bg-yellow-400 hover:bg-yellow-300 rounded-lg px-4 py-2 transition duration-300 ease-in-out shadow-lg">Link do subskrypcji</a>
                    </div>
                @endif
                <div class="p-6 text-gray-900 dark:text-gray-100" style="display: flex; flex-wrap: wrap; justify-content: center">
                    @foreach($books as $book)
                        <div onclick="window.location='{{ route('books.show', $book->id) }}';" class="cursor-pointer w-40 bg-gray-700 dark:bg-gray-800 border border-gray-600 shadow-md rounded-lg transform hover:scale-105 transition duration-300 ease-in-out" style="margin: 20px; height: 225px; box-sizing: border-box; background-repeat: no-repeat; background-size: contain; background-position: center; background-image: url({{ asset('images/' . $book->image) }})"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
