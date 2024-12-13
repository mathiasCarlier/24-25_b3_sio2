<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
   
Route::get('/about', function () {
    return View::make('pages.about');
});

Route::get('/home', function () {
    return View::make('pages.home');
});

Route::resource('users', UserController::class);
Route::resource('listes', ListeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
