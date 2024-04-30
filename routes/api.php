<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MovieController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Tutorial from ChatGPT on fully Laravel guide with Controllers, Seeders, Migration
Route::get('/movies', 'MovieController@index');
Route::get('movies/{id}', 'MovieController@show');
Route::get('movies/genre/{genre}', 'MovieController@findByGenre');

// Tutorial from Youtube
Route::get('/moviez', function () {
    return "Hello from API's";
});

// Custom made
Route::get('/moviez2', function () {
    return response()->json([
        'titlez' => 'Hellooo',
        'descz' => 'youre sooo kool',
        'moviez_code' => 1
    ]);
});

// Tutorial from ChatGPT on Laravel but important parts only
// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/tasks', [TaskController::class, 'index']);
//     Route::post('/tasks', [TaskController::class, 'store']);
//     Route::get('/tasks/{id}', [TaskController::class, 'show']);
//     Route::put('/tasks/{id}', [TaskController::class, 'update']);
//     Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
// });

// custom
Route::group([], function () {
    Route::get('/tasks', [TaskController::class, 'index']);
    Route::post('/tasks', [TaskController::class, 'store']);
    Route::get('/tasks/{id}', [TaskController::class, 'show']);
    Route::put('/tasks/{id}', [TaskController::class, 'update']);
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
});
