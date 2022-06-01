<?php

use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\GradilisteController;
use App\Http\Controllers\SefController;
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

Route::post('register', [AuthentificationController::class, 'register']);
Route::post('login', [AuthentificationController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('gradiliste', GradilisteController::class);
    Route::resource('sef', SefController::class);
    Route::post('logout', [AuthentificationController::class, 'logout']);
});
