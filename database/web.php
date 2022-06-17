<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\formcontroller;
use App\Models\todos;


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

Route::get('/',[homecontroller::class,'index']);
Route::get('/new',[formcontroller::class,'addnew']);
Route::post('/new',[formcontroller::class,'save'])->name('save');
Route::get('/delete/{id}',[formcontroller::class,'destroy']);
