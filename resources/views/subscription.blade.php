<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subskrypcja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    @if (Auth::user()->subscribed('default'))
                        @if (Auth::user()->subscription('default')->onGracePeriod())
                            <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-700 dark:text-yellow-200" role="alert">
                                <span class="font-medium">Uwaga!</span> Twoja subskrypcja została anulowana, ale nadal możesz z niej korzystać w okresie przejściowym.
                            </div>
                        @else
                            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-700 dark:text-green-200" role="alert">
                                <span class="font-medium">Subskrybowane!</span> Masz aktywną subskrypcję.
                            </div>
                        @endif
                    @else
                        <div class="p-6 text-xl flex items-center justify-between bg-gradient-to-r from-gray-700 via-gray-900 to-black border border-gray-600 rounded-lg shadow-lg mb-6">
                            <div class="flex items-center">
                                <svg class="w-10 h-10 text-yellow-400 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-9a9 9 0 11-6.165-8.533M12 12v.01M15 13h.01M9 13h.01M6 16h.01M18 16h.01M15 19h.01M9 19h.01M12 22h.01M12 12v.01"></path>
                                </svg>
                                <span class="text-yellow-400 font-bold text-2xl">Kup subskrypcję tutaj:</span>
                            </div>
                            <a href="{{ route('subscription.create') }}" class="text-gray-900 underline font-bold bg-yellow-400 hover:bg-yellow-300 rounded-lg px-4 py-2 transition duration-300 ease-in-out shadow-lg">Link do subskrypcji</a>
                        </div>

                        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                            <h3 class="text-2xl font-bold text-yellow-400 mb-4">Dlaczego warto subskrybować?</h3>
                            <p class="mb-4">Subskrypcja daje dostęp do naszej bogatej biblioteki książek, które możesz czytać w dowolnym czasie. To najlepszy sposób, aby zawsze mieć dostęp do najnowszych i najbardziej poszukiwanych książek.</p>
                            <div class="text-center">
                                <p class="text-xl">
                                    <span class="line-through text-gray-400">200 zł</span>
                                    <span class="text-yellow-400 font-bold">100 zł</span>
                                    <span class="text-gray-400">na rok dla nowych użytkowników</span>
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
