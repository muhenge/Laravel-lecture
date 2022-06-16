<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\admin;
use Illuminate\Support\facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class EricTask extends Controller
{
    
    function index(){
      
        return view('testme.adminForm');
    }
    function insert(Request $request){
     
       Session::put('name', $request->name);
       Session::put('email', $request->email);
       Session::put('password',$request->password);
      
    //    $query=admin::create([
    //     'name'=>$request->session()->get('name'),
    //     'email'=>$request->session()->get('email'),
    //     'password'=>hash::make($request->session()->get('password')),
    //     'isAdmin'=>1,
    //    ]);
    //  if($query)
    //  {
    //     echo  '<script>alert("   data   Create well")</script>';
    //  }

       
    //   return view('testme.display');
    
       
    // }
    if($request->session()->has('password') && $request->session()->has('name') && $request->session()->has('email'))
    {
      return view('testme.display');
    }
  }

    function sessionSub(Request $request)
    {
      if(DB::table('admins')->where('name', $request->session()->get('name'))
                            ->where('email',$request->session()->get('email'))->exists())
                            {
                              return  '<script>alert(" data  Exist")</script>';
                            }
                            else{
                              $query=admin::create([
                                    'name'=>$request->session()->get('name'),
                                    'email'=>$request->session()->get('email'),
                                    'password'=>hash::make($request->session()->get('password')),
                                    'isAdmin'=>1,
                                   ]);
                                 if($query)
                                 {
                                  $request->session()->forget('name');
                                  $request->session()->forget('email');
                                  $request->session()->forget('password');
                                    echo  '<script>alert("   data   Create well")</script>';
                                 }
                            
                                   
                                 /// return view('testme.display');

                              
                            }
  
    }
    }


