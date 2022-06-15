<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public  function index(){
        return view('welcome');
    }

    public function store(){
        $user=Session::get('user');
        return view('test',['user'=>$user]);
    }

}
