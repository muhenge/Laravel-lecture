<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;
use App\Http\Middleware\AgeValid;
use App\Http\Controllers\NameController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\AdditemController;
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

Route::get('/myname', function () {
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

//Route::get('/age/{age}', [AgeController::class, 'index'])->middleware(AgeValid::class);

//Route::resource('/name/{name}',NameController::class);

//routing controller form data
Route::get('/mydata',function(){
    return view('form');
});
Route::get('/displaydata',[FormController::class,'Formfn'])->name('data');


//routing crud data

//index routing
Route::get('/Form',[CrudController::class,'ViewFormfn']);

//outout routing
Route::get('/cool',[CrudController::class,'register'])->name('mydata');


//routing of add
Route::view('add','crud.additem');
Route::get('/result',[AdditemController::class,'add'])->name('data');











