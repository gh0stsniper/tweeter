<?php

use App\Http\Controllers\TweetsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

Route::resource("/tweets", TweetsController::class)->middleware('auth');
Route::get("/register", [RegisterController::class, 'create'])->middleware('guest');
Route::post("/users", [RegisterController::class, 'store'])->middleware('guest');
Route::post("/logout", [RegisterController::class, 'delete'])->middleware('auth');
Route::get("/login", [SessionController::class, 'create'])->middleware('guest');
Route::post("/login", [SessionController::class, 'store'])->middleware('guest');
// only guests can signup.


Route::get("/", function(){

    return view("home");
});
