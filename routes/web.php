<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgeController;
use App\Http\Middleware\AgeMiddleware;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\TaskController;

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

//Chllenge Route
Route::get('/challenge',[ChallengeController::class, 'index'])->name('challenge');
Route::get('/challenge/store', [ChallengeController::class, 'store'])->name('challengeStore');


// Route::get('sub.example',[ChallengeController::class, 'test']);
Route::domain('sub.example')->group(function () {
    Route::get('/',[ChallengeController::class, 'test'])->name('subdomain');
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Task routes
Route::get('/task',[TaskController::class, 'select'])->name('task');
Route::get('/create',[TaskController::class, 'taskform'])->name('createTask');
Route::post('/store',[TaskController::class, 'store'])->name('taskstore');















































































