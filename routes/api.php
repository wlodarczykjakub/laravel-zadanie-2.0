<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserEquipmentController;
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
Route::post('/login', [AuthController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->prefix('user-equipment')->group(function (){
    Route::post('/', [UserEquipmentController::class, 'store']);
    Route::get('/', [UserEquipmentController::class, 'get']);
});
