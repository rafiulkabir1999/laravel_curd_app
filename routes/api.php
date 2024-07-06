<?php

use App\Http\Controllers\ShowroomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('get-showrooms',[ShowroomController::class,'getShowrooms']);
Route::get('get-showrooms/{id}',[ShowroomController::class,'getShowroomsById']);
Route::put('update-showrooms/{id}',[ShowroomController::class,'updateShowroom']);
Route::delete('delete-showrooms/{id}',[ShowroomController::class,'deleteShowroom']);
