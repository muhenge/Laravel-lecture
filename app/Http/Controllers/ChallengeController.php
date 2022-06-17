<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Challenge;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;


class ChallengeController extends Controller
{
    public function index(Request $request)
    {
        $challenges = DB::table('challenges')->get();
        return view('challenge.index', compact('challenges'));
    }
    
    public function store(Request $data)
    {
        Challenge::create([
            'name' => $data['kLab'],
        ]);
        Session::forget('kigali');
        return redirect()->route('challengeSelect')->with('success', 'District stored successful');
    }

    public function form()
    {
        return view('challenge.challenge');
    }

    public function create(Request $request)
    {
        $result = $request->kacyiru;
        Session::put('kigali', $result);
        $value = DB::table('challenges')->where('name', '=', $result)->get();
        $count= collect($value)->count();
        if($count>0)
        {
            return("Data already Exist in DB");
            Session::forget('kigali');
        }
        else{
            return view('challenge.challenge2');
        }
    }

    public function edit($id)
    {
        $challenge= Challenge::find($id);
        return view('challenge.edit', compact('challenge'));
    }

    public function update(Request $data, $id)
    {
        $challenge = Challenge::find($id);
        $challenge->name = $data->kacyiru;
        $challenge->save();
        return redirect()->route('challengeSelect')->with('success', 'District updated successful');
    }

    public function destroy(Challenge $challenge, $id)
    {
        // return("delete here");
        $challenge->find($id)->delete();
        return redirect()->route('challengeSelect')->with('success', 'District deleted successful');
    }

    public function test()
    {
        return("hello Subdomain");
    }

}
