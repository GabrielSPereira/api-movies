<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function (Request $request) {
    return ['pong' => true];
});

Route::get('/movies', [MovieController::class, 'all']);

Route::get('/movie/{id}', [MovieController::class, 'one']);

Route::post('/movie', [MovieController::class, 'new']);

Route::put('/movie/{id}', [MovieController::class, 'edit']);

Route::delete('/movie/{id}', [MovieController::class, 'delete']);