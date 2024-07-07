<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ShowroomController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get('get-users', [AuthController::class,'getUser']);

Route::group([], function () {
    Route::get('get-users', [AuthController::class, 'getUser']);
    Route::get('get-users', [AuthController::class, 'getUser']);
});
Route::group([], function () {
    Route::get('get-students', [StudentController::class, 'getStudents']);
    Route::get('get-students/{id}', [StudentController::class, 'getStudentsById']);
});
Route::group([], function () {
    Route::get('get-blogs', [BlogController::class, 'getBlogs']);
    Route::get('get-blogs/{id}', [BlogController::class, 'getBlogsById']);
});





Route::get('get-showrooms',[ShowroomController::class,'getShowrooms']);
Route::get('get-showrooms/{id}',[ShowroomController::class,'getShowroomsById']);
Route::put('update-showrooms/{id}',[ShowroomController::class,'updateShowroom']);
Route::delete('delete-showrooms/{id}',[ShowroomController::class,'deleteShowroom']);
