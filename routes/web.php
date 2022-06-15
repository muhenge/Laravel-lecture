<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ControllerMiddleware;
use App\Http\Controllers\ResourceController;
use App\Http\Middleware\AgeValid;
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

Route::get('/', function () {
    return view('welcome');
});

//Optional parameters
Route::get('/skills/{product?}', function ($product='skill not found') {
    return 'Skills '.$product;
});

// Required parameters and Regex

Route::get('/skills/{id}', function ($id) {
    return 'Skills '.$id;
})->where('id','[0-9]');

Route::get('/age/{age}', [AgeController::class, 'index'])->middleware("age");

//Controllers Assignment

Route::get('/basic', [BasicController::class, 'index'])->name("basicController");
Route::get('/single', SingleActionController::class)->name("singleController");
Route::get('/controMiddle/{age?}', [ControllerMiddleware::class,'index'])->name("controllermiddleware")->middleware("age");
Route::resource('resource',ResourceController::class)->parameters(['resource' =>'sano']);
