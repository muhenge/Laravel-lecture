<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\AgeValid;

class ControllerMiddleware extends Controller
{
    public function __contruct()
    {
        $this->middleware('AgeValid');
    }

    public function index($age = null)
    {
        return response("you are allowed to use this<br>your age:".$age, 200);
    }
}
