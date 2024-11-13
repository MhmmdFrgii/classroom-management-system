<?php

use App\Http\Controllers\ClassmeetController;
use App\Http\Controllers\ClassmeetMemoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemoryController;
use App\Http\Controllers\P5Controller;
use App\Http\Controllers\P5MemoryController;
use App\Http\Controllers\PagelaranController;
use App\Http\Controllers\PagelaranMemoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RandomController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\UserController;
use App\Models\Slide;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('guest');
Route::get('/memory', [MemoryController::class, 'index'])->name('memory')->middleware('guest');
Route::get('/memorypagelaran', [PagelaranMemoryController::class, 'index'])->name('memorypagelaran');
Route::get('/memoryclassmeet', [ClassmeetMemoryController::class, 'index'])->name('memoryclassmeet');
Route::get('/memoryp5', [P5MemoryController::class, 'index'])->name('memoryp5');


Route::middleware('auth')->group(function () {

    Route::prefix('admin')->group(function () {


        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('slides', SlideController::class);
        Route::resource('pagelaran', PagelaranController::class);
        Route::resource('classmeet', ClassmeetController::class);
        Route::resource('plima', P5Controller::class);
        Route::resource('random', RandomController::class);
    });

    Route::middleware('role:super admin')->group(function () {
        Route::resource('users', UserController::class);
    });
});

require __DIR__ . '/auth.php';
