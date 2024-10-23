<?php

use App\Http\Controllers\Api\TaskController;
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



Route::group(['prefix'=> 'tasks'], function () {
    Route::get('/', [TaskController::class, 'index']);
    Route::post('/', [TaskController::class, 'store']);
    Route::get('/{task}', [TaskController::class, 'show']);
    // Route::get('/{task}', [TaskController::class, 'show'])->withTrashed(); dùng hiển thị các dữ liệu xoá mềm

    Route::put('/{task}', [TaskController::class, 'update']);
    Route::delete('/{id}', [TaskController::class, 'soft_delete']);
    Route::patch('/{id}', [TaskController::class, 'restore_delete']);
    Route::delete('/{task}', [TaskController::class,'destroy']);
});