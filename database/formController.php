<?php

namespace App\Http\Controllers;
use App\Models\todos;

use Illuminate\Http\Request;

class formController extends Controller
{
    public static function addnew(){
        return view('form');
    }
    public function save(Request $request){
    

      
       $todos=$request->validate([
        'name'=>'required',
        'description'=>'required'|'max:380'
       ]);
       $todos=new todos;
$todos->name=$request->name;
$todos->description=$request->Description;
$todos->save();
return redirect('/');
      }

public function destroy(todos $todos ,$id)
{
    $row=todos::destroy($id);

    return redirect('/');
}
}