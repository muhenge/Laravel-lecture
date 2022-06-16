<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\modeles\laravel;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    function adddata(Request $req){

        $query=DB::table('user_infos')->insert([
            'name'=>$req->input('name'),
            'phone'=>$req->input('phone'),
            'email'=>$req->input('email'),
           
        ]);

        if($query){
            return back()->with('success','data have been success inserted');
        }else{
            return back()->with('fail','NO data inserted');
        
        }
        

    }

}
