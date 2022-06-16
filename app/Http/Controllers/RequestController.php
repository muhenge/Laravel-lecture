<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\City;

class RequestController extends Controller
{
    function store(Request $req){
        session(['user' => $req->input('user')]);
        $data = session('user');

        if (DB::table('cities')->where('city', $data)->exists()) {
            $req->session()->forget('user');
            return "City already registered";
        }else{         
            $data = City::create([
                'city' => $data
            ]);
            $req->session()->forget('user');
            return "City stored in session registerd";
        }
    }

    function view()
    {
        $city = DB::table('cities')
                    ->select('*')
                    ->get();
        return view('result',compact('city'));
    }
}
