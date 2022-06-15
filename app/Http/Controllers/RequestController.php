<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    function store(Request $req){
        session(['user' => $req->input('user')]);

        return view('result');
    }
}
