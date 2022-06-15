<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
        return view('testme.adminForm');
    }
    function insert(Request $request){
        
        $data=
        ([
           'name'=> $request->username,
           'pass'=>$request->password,
        ]);
        return $data;
       
    }
}
