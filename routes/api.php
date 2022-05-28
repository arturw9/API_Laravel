<?php

use App\Http\Controllers\AdressController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/adresses', [AdressController::class, 'index']);
Route::get('/adresses/{id}', [AdressController::class, 'show']);
Route::post('/adresses', [AdressController::class, 'store']);
Route::put('/adresses/{id}', [AdressController::class, 'update']);
Route::delete('/adresses/{id}', [AdressController::class, 'destroy']);
//Users
Route::get('/users', [UsersController::class, 'index'])->middleware('jwt.auth');
Route::get('/users/{id}', [UsersController::class, 'show']);
Route::post('/users', [UsersController::class, 'store']);
Route::put('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
