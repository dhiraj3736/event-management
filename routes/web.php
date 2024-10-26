<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\jpt;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::resource('categories', CategoryController::class);
    Route::resource('events', EventController::class);
    Route::resource('attendees', AttendeeController::class);


    Route::get('/jpt', [jpt::class, 'jpt']);
});

require __DIR__.'/auth.php';
