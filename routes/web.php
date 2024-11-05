<?php

use App\Http\Controllers\PagelaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('slides', SlideController::class);
    Route::resource('pagelaran', PagelaranController::class);
});

require __DIR__ . '/auth.php';
