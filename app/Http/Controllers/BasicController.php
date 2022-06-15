<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    function index(){
        return response("I'm basic controller!", 200);
    }
}
