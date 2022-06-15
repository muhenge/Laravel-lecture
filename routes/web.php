
<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
    return "hello world";

});
Route::get('/log', function() {
    return "this is my log form";
});

Route::get(
    '/post/{id}/{name}',
    function ($id, $name) {
        //return view('welcome');
        return "my id is:" . " " . $id . " " . "and my name is" . " " .  $name;
    }
);

Route::get('student/details/example', array('as' => 'student.details', function () {
    $url = route('student.details');
    return "The url is : " . $url;
}));

Route::get('/',function()  
{  
  return view('welcome');  
})-> middleware('age');  
Route::Get('user/profile',function()  
{  
  return "user profile";  
}); 



