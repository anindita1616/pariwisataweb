<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataApiController;
use App\Http\Controllers\PenginapanApiController;
use App\Http\Controllers\KulinerApiController;
use App\Http\Controllers\EventApiController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::apiResource('wisatas', WisataApiController::class);
Route::apiResource('penginapans', PenginapanApiController::class);
Route::apiResource('kuliners', KulinerApiController::class);
Route::apiResource('events', EventApiController::class);
