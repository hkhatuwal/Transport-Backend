<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('authencation')->group(function(){
    Route::get("/",[Controller::class,'home']);
Route::get("/user-table",[Controller::class,'users_table']);
Route::get("/post",[Controller::class,'show_posts']);
Route::get("/map",[Controller::class,'show_map']);
Route::get("/readings",[Controller::class,'show_readings']);
});
Route::post("/login/auth",[Controller::class,'auth']);
Route::get("/logout",[Controller::class,'logout']);

Route::view('/login','login');

