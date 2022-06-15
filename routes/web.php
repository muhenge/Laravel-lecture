<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgeController;
use App\Http\Middleware\AgeMiddleware;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });



//Resource controller's named Routek
Route::get('/',[HomeController::class, 'index'])->name('welcome');

//Basic controller Route with Middleware
Route::get('/age/{age}',[AgeController::class, 'index'])->middleware('age');

//Resource Route
Route::resource('/home', HomeController::class);
















































































