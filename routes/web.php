<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/lapangan', [LapanganController::class, 'index'])->name('lapangan');
    Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
    Route::get('/list', [ListController::class, 'index'])->name('list');
    Route::get('/history', [HistoryController::class, 'index'])->name('history');
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
    Route::get('/booking/checkout', [BookingController::class, 'checkout'])->name('booking.checkout');
    Route::post('/booking/checkout', [BookingController::class, 'booking']);

    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');
});
