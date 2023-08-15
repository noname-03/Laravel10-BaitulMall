<?php

use App\Http\Controllers\ExpenditureController;
use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('income', IncomeController::class);
    Route::resource('expenditure', ExpenditureController::class);
});