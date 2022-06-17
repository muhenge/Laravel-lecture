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

Route::get('/', function () {
    return view('welcome');
});



//Resource controller's named Routek
// Route::get('/',[HomeController::class, 'index'])->name('welcome');

//Basic controller Route with Middleware
Route::get('/age/{age}',[AgeController::class, 'index'])->middleware('age');

//Resource Route
Route::resource('/home', HomeController::class);

//Authentication Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Authonticated Middleware
Route::middleware(['auth'])->group(function(){

//Chllenge Route
Route::get('/challeng',[ChallengeController::class, 'index'])->name('challengeSelect');
Route::get('/challenge',[ChallengeController::class, 'create'])->name('challenge');
Route::get('/form', [ChallengeController::class, 'form'])->name('challengeForm');
Route::get('/challenge/store', [ChallengeController::class, 'store'])->name('challengeStore');
Route::get('/challenge/edit/{id}', [ChallengeController::class, 'edit'])->name('challengeEdit');
Route::put('/challenge/update/{id}', [ChallengeController::class, 'update'])->name('challengeUpdate');
Route::get('/challenge/delete/{id}', [ChallengeController::class, 'destroy'])->name('challengeDelete');


// Route::get('sub.example',[ChallengeController::class, 'test']);
Route::domain('sub.example')->group(function () {
    Route::get('/',[ChallengeController::class, 'test'])->name('subdomain');
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Task routes
Route::get('/task',[TaskController::class, 'select'])->name('task');
Route::get('/create',[TaskController::class, 'taskform'])->name('createTask');
Route::post('/store',[TaskController::class, 'store'])->name('taskstore');
Route::get('/edit/{id}',[TaskController::class, 'edit'])->name('taskEdit');
Route::put('/update/{id}', [Taskcontroller::class, 'update'])->name('taskUpdate');
Route::get('/delete/{id}', [TaskController::class, 'destroy'])->name('taskDelete');

});

