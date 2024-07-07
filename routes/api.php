<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StudentController;

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



