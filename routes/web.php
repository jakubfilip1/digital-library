<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;
use Laravel\Cashier\Http\Controllers\WebhookController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('webhook', [WebhookController::class, 'handleWebhook'])->name('webhook');

Route::middleware(['auth', 'verified'])->name('subscription.')->prefix('subscription')->group(function () {
    Route::get('/', [SubscriptionController::class, 'index'])->name('index');
    Route::get('/create', [SubscriptionController::class, 'create'])->name('create');
    Route::get('/success', [SubscriptionController::class, 'success'])->name('success');
    Route::get('/cancel', [SubscriptionController::class, 'cancel'])->name('cancel');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
