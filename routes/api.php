<?php

use App\Http\Controllers\Auth\MeController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Auth\SignOutController;
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

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('sign-in', SignInController::class);
    Route::post('sign-out', SignOutController::class);
    Route::get('me', MeController::class);
});
