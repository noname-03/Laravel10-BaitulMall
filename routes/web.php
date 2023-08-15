<?php

use App\Http\Controllers\DistributorController;
use App\Http\Controllers\ExpenditureController;
use App\Http\Controllers\ExpenditureMalController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\MustahikController;
use App\Http\Controllers\MuzakiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\SlideController;
use App\Models\ExpenditureMal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return redirect()->route('guest.home');
});

Auth::routes();

Route::get('/home', [GuestController::class, 'index'])->name('guest.home');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('user', UserController::class);
    Route::resource('income', IncomeController::class);
    Route::resource('expenditure', ExpenditureController::class);
    Route::resource('muzaki', MuzakiController::class);
    Route::resource('mustahik', MustahikController::class);
    Route::resource('reception', ReceptionController::class);
    Route::resource('distributor', DistributorController::class);
    Route::resource('expenditureMal', ExpenditureMalController::class);
    Route::resource('slide', SlideController::class);
    Route::resource('news', NewsController::class);
});