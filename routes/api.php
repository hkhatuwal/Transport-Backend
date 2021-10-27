<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ReadingsController;
use App\Http\Controllers\UserController;
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
Route::get('get_users',[UserController::class,'get_users']);
Route::get('get_user_by_id',[UserController::class,'get_users_by_id']);
Route::get('login',[UserController::class,'login']);
Route::get('admin-login',[UserController::class,'admin_login']);
Route::get('insert_reading',[ReadingsController::class,'create']);
Route::get('get_readings_by_id',[ReadingsController::class,'data_by_id']);
Route::get('get_readings_by_id',[ReadingsController::class,'data_by_id']);



Route::get('get_post_data_by_id',[PostsController::class,'get_post_data_by_id']);
Route::get('get_post_data',[PostsController::class,'get_post_data']);
Route::post('upload_data',[PostsController::class,'upload_data']);