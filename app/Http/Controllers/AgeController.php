<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgeController extends Controller
{
     public function Index($age){
        return response("You allowed , because you are ".$age." years old !");
     }
}
