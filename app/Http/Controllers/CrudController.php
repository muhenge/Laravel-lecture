<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    function register(Request $request){

        //validating input fields 
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique:crudtb'
        ]);

        function add(Request $r){
            return $r->input();
        }

        $query=DB::table('crudtb')->insert([
            'u_id'=>$request->input(),
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'gender'=>$request->input('gender'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email')
        ]);

        if($query){
            return back()->with('success','Data inserted succesfully !');
        }else{
            return back()->with('success','Data inserted succesfully !');
        }


    }

    function ViewFormfn(){
        return view('crud.index');
    }
}
