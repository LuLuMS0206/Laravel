<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;

Route::resource('activities', ActivityController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('index.html', [PageController::class, 'about'])->name('about');
Route::get('about.html', [PageController::class, 'about'])->name('about');
Route::get('rooms.html', [PageController::class, 'rooms'])->name('rooms');
Route::get('roomsDetail.html', [PageController::class, 'roomsDetail'])->name('roomsDetail');
Route::get('offers.html', [PageController::class, 'offers'])->name('offers');
Route::get('contact.html', [PageController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
