<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;
use App\Http\Controllers\SessionDataCtrl;
use App\Http\Controllers\TypesOfCotrollers;
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

// Route::domain('{sub}.example.com')->group(function(){
//     Route::get('/',[TypesOfCotrollers::class],'index');
// });

Route::get('/save',[SessionDataCtrl::class, 'saveFromSession'])->name('sn_sv');
Route::post('/store',[SessionDataCtrl::class, 'storeSessiondata'])->name('sn_str')->middleware('smdw');
Route::get('/all',[SessionDataCtrl::class, 'display']);


Route::get('search/member',[TypesOfCotrollers::class,'find'])->name('search');
Route::post('find/member',[TypesOfCotrollers::class, 'findMember'])->name('find');
Route::resource('member',TypesOfCotrollers::class)->only(['index','create','store']);