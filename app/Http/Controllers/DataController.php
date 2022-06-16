<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\students;
class DataController extends Controller
{
    function datafn(Request $data)

    { 
        return view("form");
    }
    function sessionfn(Request $req){
        $req-> validate([
            "F_name" =>"required",
            "L_name" =>"required",
            "Email" =>"required|email|unique:students"
        ]);
        students:: create([
            'firstname'=>$req->input('F_name'),
            'lastname'=>$req->input('L_name'),
            'email'=>$req->input('Email'),
        ]);
        return redirect(route('retriveddata'));
    }
    function retrivefn(){
        
        $qur =students::all();
        // return $qur;
       return view('retriveddata', compact('qur'));
        


    }
   

    
    
    

    function formdata(){
        return view('form');
    }
}
