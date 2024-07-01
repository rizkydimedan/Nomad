<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->namespace('Admin')->group( function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });