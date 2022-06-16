<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdditemController extends Controller
{

    function add(Request $r){
       // return $r->input();
        //validating input fields 
        $r->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'phone'=>['required','max:10'],
            'email'=>'required|email|unique:crudtb'
        ]);

       $data=DB::table('crudtb')->insert([
        'u_id'=>$r->input(''),
        'firstname'=>$r->input('firstname'),
        'lastname'=>$r->input('lastname'),
        'gender'=>$r->input('gender'),
        'phone'=>$r->input('phone'),
        'email'=>$r->input('email')
       ]);

        if($data){
            return back()->with('success','Data inserted succesfully !');
       
        }else{
            return back()->with('fail','Data not inserted !');
        }

    }
}
