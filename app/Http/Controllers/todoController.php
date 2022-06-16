<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\todo;
class todoController extends Controller
{
function index(){
    return view('testme.todoCreate');
}
function create(Request $request)
{
    $validator=Validator::make($request->all(),[
        'title'=>'required|regex:/^[a-zA-Z\s]*$/',
        'description'=>'required|string|max:350',
    ])->validate();
    $todo=new todo();
    $todo->title=$request->input('title');
    $todo->description=$request->input('description');
    if(DB::table('todos')->where('title',$todo->title)->exists())
    {
        return back()->with('fail','data Exists');
    }
    else{
        $todo->save();
     
        return redirect('/show')->with('success', 'Data Saved!');
   }
}

function show(){
    $data=todo::orderBy('id','desc')->get();
    return view('testme.todoShow',compact('data'));
}
}
