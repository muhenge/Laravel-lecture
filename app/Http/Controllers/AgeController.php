<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index($age) {
        return response('age is ' . $age, 200);
    }
}
