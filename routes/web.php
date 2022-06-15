<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;
use App\Http\Middleware\AgeValid;
use  App\Http\Controllers\invokeController;
use App\Http\Controllers\studentController;
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

Route::get('/age/{age}', [AgeController::class, 'index'])->middleware(AgeValid::class);
Route::get('/server', invokeController::class);
Route::resource('student', studentController::class);
///Customize missing method
Route::resource('student', studentController::class)
        ->missing(function (Request $request) {
            return Redirect::route('about');
        });

