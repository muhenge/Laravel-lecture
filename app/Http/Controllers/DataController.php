<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class DataController extends Controller
{
    function index(){
        
    }
    function datafn(Request $data)
    {

    }
    function sessionfn(Request $req){
        Session::put('fname',$req->F_name);
        Session::put('lname',$req->L_name);

        return view("result");
    }
    

    
    
    

    function formdata(){
        return view('form');
    }
}
