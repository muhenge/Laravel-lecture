<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\City;

class DemoController extends Controller
{
    public function index()
    {
        $city = DB::table('cities')
                    ->select('*')
                    ->get();
        return view('demo.dashboard',compact('city'));
    }

    function store(Request $req)
    {
        session(['user' => $req->input('city')]);
        $data = session('user');

        if (DB::table('cities')->where('city', $data)->exists()) {
            $req->session()->forget('user');
            $city['city'] = DB::table('cities')
                        ->select('*')
                        ->get();
            $city['mes'] = "City already registered";
            return view('demo.dashboard',$city);
        }else{         
            $data = City::create([
                'city' => $data
            ]);
            $req->session()->forget('user');
            return redirect(route('dashboard'));
        }
    }

    function viewTodo()
    {
        $result = DB::table('to_dos')->orderBy('id','DESC')->get();
        return view('demo.todo', compact('result'));
    }
}
