<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail', [DetailController::class, 'detail'])->name('detail');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/checkout-success', [CheckoutController::class, 'success'])->name('checkout-success');

Route::prefix('admin')->namespace('Admin')->middleware(['auth', 'isAdmin'])->group( function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

    // Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    //     Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    //     // Add more admin routes here
    // });
Auth::routes();


