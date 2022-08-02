<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth/produto'
], function ($router) {
    Route::post('/store', [BookController::class, 'store']);
    Route::post('/update', [BookController::class, 'update']);
    Route::get('/delete/{id}', [BookController::class, 'delete']); 
    Route::get('/show/{id?}', [BookController::class, 'show']); 
});