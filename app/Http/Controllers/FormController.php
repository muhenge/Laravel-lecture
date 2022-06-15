<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    function Formfn(Request $request){
        Session::put('fname',$request->firstname);
        Session::put('lname',$request->lastname);

        return view('DisplayData');
    }
}
