<?php

use App\Http\Controllers\ActiveUserController;
use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });






Route::post('/tokens/create', [ApiTokenController::class, 'createToken']);

// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/user', [ActiveUserController::class, 'index'])->name('user');
//     Route::post('/tokens/create', [ApiTokenController::class, 'createToken']);
// });

// краткий синтаксис для роутов ресурсного контроллера CarController
// Route::group(['middleware' => 'auth'], function() {
//     Route::apiResource('/cars', CarController::class);
// });

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::apiResource('/cars', CarController::class);
    // 
    Route::get('/user', [ActiveUserController::class, 'index'])->name('user');
});
// Route::post('/tokens/create', [ApiTokenController::class, 'createToken']);

// Route::apiResource('/cars', CarController::class);
