<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Challenge;


class ChallengeController extends Controller
{
    public function index(Request $request)
    {
        $result = $request->kacyiru;
        Session::put('kigali', $result);
        // $value = Session::get('kigali');
        return view('challenge.challenge2');
    }

    public function test()
    {
        return("hello Subdomain");
    }

    public function store(Request $data)
    {
        Challenge::create([
            'name' => $data['kLab'],
        ]);
        return "store successful";
    }
}
