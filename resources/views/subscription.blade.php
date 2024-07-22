<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('navigation.Subscription') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(Auth::user()->subscribed())
                        @if($subscription->canceled() && $subscription->onGracePeriod())
                            <p>Subskrypcja została annulowana ale jeszcze mozna korzystac</p>
                        @endif
                        <p>You are subscribing</p>
                    @else
                        <p>You are not subscribed. Subscribe here: <a style="color: red;" href="{{ route('subscription.create') }}">SUBSCRIBE</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
