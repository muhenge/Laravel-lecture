<?php

namespace App\Http\Controllers;
use App\resources\views\welcome;
use Illuminate\Http\Request;
use App\Models\todos;

class homecontroller extends Controller
{
  public static function index(){
    return view('welcome')->with('todo_arr',todos::all());
  }
  
}
