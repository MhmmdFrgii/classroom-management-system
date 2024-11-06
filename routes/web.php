<?php

use App\Http\Controllers\ClassmeetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\P5Controller;
use App\Http\Controllers\PagelaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RandomController;
use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('slides', SlideController::class);
    Route::resource('pagelaran', PagelaranController::class);
    Route::resource('classmeet', ClassmeetController::class);
    Route::resource('plima', P5Controller::class);
    Route::resource('random', RandomController::class);
});

require __DIR__ . '/auth.php';
