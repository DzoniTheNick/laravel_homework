<?php

use App\Http\Controllers\OdeljenjeController;
use App\Http\Controllers\StrukaController;
use App\Http\Controllers\UserController;
use App\Http\Resources\StrukaResource;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [UserController::class, 'index']);
Route::get('user/{id}', [UserController::class, 'show']);
Route::get('/odeljenja', [OdeljenjeController::class, 'index']);
Route::get('/odeljenje/{id}', [OdeljenjeController::class, 'show']);
Route::get('/struke', [StrukaController::class, 'index']);
Route::get('/struka/{id}', [StrukaController::class, 'show']);