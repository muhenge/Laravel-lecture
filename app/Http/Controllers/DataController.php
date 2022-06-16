<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class DataController extends Controller
{
    function datafn(Request $data)

    { 
        return view("form");
    }
    function sessionfn(Request $req){
        //Session::put('fname',$req->F_name);
        // Session::put('lname',$req->L_name);
         //Session::put('email',$req->Email);

         return view("result");
        $req-> validate([
            "Email" =>"required|email|unique:students"
        ]);
        $dtbase = DB::table("students")->insert([
            "firstname"=>$req->input('F_name'),
            "lastname"=>$req->input('L_name'),
            "email"=>$req->input('Email')
        ]);

        if($dtbase){
            return $request->session()->put("Done","Data inserted succesful");
        }
        else{
           return $request->session()->put("try","No data inserted");
        }
        return redirect('results');
    }
    

    
    
    

    function formdata(){
        return view('form');
    }
}
