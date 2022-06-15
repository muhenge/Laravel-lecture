<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EricTask extends Controller
{
    
    function index(){
        Session::put('name','gustave');
        return view('testme.adminForm');
    }
    function insert(Request $request){

       Session::put('name', $request->username);
       Session::put('password',$request->password);
       return view('testme.display');
    
       
    }
}
