<?php

    use App\Http\Controllers\ApiWorksController;
    use App\Http\Controllers\Contracts\ContractsIndexController;
    use App\Http\Controllers\Contracts\ContractsShowController;
    use App\Http\Controllers\Holidays\HolidaysIndexController;
    use App\Http\Controllers\Holidays\HolidaysShowController;
    use App\Http\Controllers\Users\UserCreateController;
    use App\Http\Controllers\Users\UserShowController;
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
    Route::get('/users', [UsersIndexController::class, '__invoke']);
    Route::post('/users', [UserCreateController::class, '__invoke']);
    Route::get('/users/{id}', [UserShowController::class, '__invoke']);
    Route::get('/contracts', [ContractsIndexController::class, '__invoke']);
    Route::get('/contracts/{id}', [ContractsShowController::class, '__invoke']);
    Route::get('/holidays', [HolidaysIndexController::class, '__invoke']);
    Route::get('/holidays/{id}', [HolidaysShowController::class, '__invoke']);
    Route::middleware('auth:sanctum')->get(
        '/user', function (Request $request) {
        return $request->user();
        }
    );
