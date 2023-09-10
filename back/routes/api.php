<?php

use App\Http\Controllers\ApiWorksController;
use App\Http\Controllers\Contracts\ContractsIndexController;
use App\Http\Controllers\Holidays\HolidaysIndexController;
use App\Http\Controllers\Users\UsersIndexController;
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


Route::get('/', [ApiWorksController::class, 'use']);
Route::get('/users', [UsersIndexController::class, 'use']);
Route::get('/contracts', [ContractsIndexController::class, 'use']);
Route::get('/holidays', [HolidaysIndexController::class, 'use']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

