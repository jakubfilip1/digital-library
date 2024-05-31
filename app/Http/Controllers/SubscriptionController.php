<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Cashier\Checkout;

class SubscriptionController extends Controller
{
    public function index(Request $request): View
    {
        return view('subscription');
    }

    public function create(Request $request): Checkout
    {
        return $request->user()
            ->newSubscription('default', 'price_1PMDClBc9AhnTSCFZysdmhIq')
            ->trialDays(10)
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('subscription.index'),
                'cancel_url' => route('subscription.cancel'),
            ]);
    }

    public function success(Request $request)
    {
        dd($request);
    }

    public function cancel(Request $request)
    {
        dd($request);
    }
}
