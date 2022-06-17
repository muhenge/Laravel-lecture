<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ControllerMiddleware;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AgeValid;
use App\Http\Middleware\Authenticate;
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

// Route::get('/', function () {
//     return view('welcome');
// });

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

//Request
Route::get('/j', function () {
    return view('audace');
})->name('sano');

Route::post('/view',[RequestController::class,'store'])->name('viewUser');

//subcontroller
Route::domain('sub.test.example')->group(function (){
    Route::get('/domain',function ()
    {
        return "hello domain";
    });
});

//task todos

// Route::get('/todo1',[ToDoController::class,'home'])->name('home');
// Route::post('/register1',[ToDoController::class,'create'])->name('addTask');
// Route::get('/form1/{id?}',[ToDoController::class,'edit'])->name('edit');
// Route::get('/delete1/{id?}',[ToDoController::class,'delete'])->name('delete');
// Route::post('/update1',[ToDoController::class,'update'])->name('update');

// Route::get('list',[RequestController::class,'view'])->name('list');


//Demo route

Route::group(['middleware' =>['auth']],function(){
    Route::get('/', [DemoController::class,'index'])->name('dashboard');
    Route::post('/addCity',[DemoController::class,'store'])->name('addSession');

    Route::get('/todo', [DemoController::class,'viewTodo'])->name('todoDashboard');
    Route::post('/register',[ToDoController::class,'create'])->name('addTask');
    Route::get('/form/{id?}',[ToDoController::class,'edit'])->name('edit');
    Route::get('/delete/{id?}',[ToDoController::class,'delete'])->name('delete');
    Route::post('/update',[ToDoController::class,'update'])->name('update');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/loginOP',[AuthController::class,'authenticate'])->name('auth');
Route::get('/registerForm',[AuthController::class,'reg'])->name('newuserForm');
Route::post('/registerNew',[AuthController::class,'register'])->name('newuser');