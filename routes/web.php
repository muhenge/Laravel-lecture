<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;
use App\Http\Controllers\SessionDataCtrl;
use App\Http\Controllers\TodoCtrl;
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

Route::name('home')->get('/',function(){
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/save',[SessionDataCtrl::class, 'saveFromSession'])->name('sn_sv')->middleware('auth');
Route::post('/store',[SessionDataCtrl::class, 'storeSessiondata'])->name('sn_str')->middleware('smdw');
Route::get('/all',[SessionDataCtrl::class, 'display'])->name('display')->middleware('auth');
Route::get('/edit/{id}', [SessionDataCtrl::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [SessionDataCtrl::class, 'update'])->name('update');
Route::delete('/delete/{id}',[SessionDataCtrl::class, 'destroy'])->name('delete');

Route::resource('/todo',TodoCtrl::class);