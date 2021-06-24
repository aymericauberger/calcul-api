<?php

use App\Http\Controllers\OperationsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('add', [OperationsController::class, 'add']);

Route::post('multiply', [OperationsController::class, 'multiply']);

Route::post('subtraction', [OperationsController::class, 'subtraction']);

Route::post('division', [OperationsController::class, 'division']);
