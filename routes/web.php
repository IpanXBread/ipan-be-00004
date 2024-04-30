<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

// Test
Route::get('/test', [TestController::class, 'index']);

// Main page route
Route::get('/', [MovieController::class, 'index']);

// Movies routes
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/read', [MovieController::class, 'read']);
Route::post('/movies', [MovieController::class, 'store']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
Route::get('/movies/{genre}', [MovieController::class, 'findByGenre']);
Route::get('/movies/within-time-slot', [MovieController::class, 'moviesWithinTimeSlot']); // doesnt work
Route::get('/movies/{title}', [MovieController::class, 'getMovieByTitle']); // doesnt work



