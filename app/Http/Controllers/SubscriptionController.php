<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Cashier\Checkout;

class SubscriptionController extends Controller
{
    public function index(Request $request): View
    {
        $subscription = $request->user()->subscription();

        return view('subscription', [
            'subscription' => $subscription
        ]);
    }

    public function create(Request $request): Checkout
    {
        return $request->user()
            ->newSubscription('default', 'price_1PMDClBc9AhnTSCFZysdmhIq')
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('subscription.index'),
                'cancel_url' => route('subscription.index'),
            ]);
    }

    public function success(Request $request)
    {
        dd($request);
    }

    public function cancel(Request $request)
    {
        $subscription = $request->user()->subscription();
        $subscription->cancel();

        return redirect()->route('subscription.index');
    }
}
