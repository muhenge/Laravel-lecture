<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;
use App\Http\Middleware\agevalid;
use App\Http\Controllers\PageController;
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
    //return view('hello word');
    return'this my page';
});
Route::get('/about/{age}',[AgeController::class,"Index"])->middleware(agevalid::class);
Route::resource('page', PageController::class);
Route::Resource('hello', PageController::class);



