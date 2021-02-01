<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\userController;
use App\Http\Controller\productController;
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

  Route::get('/login', function () {
      return view('login');
  });
//Route::view("/","login");
Route::post("/login",[userController::class,'login']);
Route::get("/",[productController::class,'index']);