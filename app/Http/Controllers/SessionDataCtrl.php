<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\TeamMemberInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SessionDataCtrl extends Controller
{
    protected $repo;

    public function __construct(TeamMemberInterface $members)
    {
        $this->repo=$members;
    }

    public function saveFromSession(){
        return view('create');
    }

    public function storeSessiondata(Request $request){
        $validation= Validator::make($request->all(),['name' => 'required', 'email'=> 'required|unique:session_mdls']);
        if($validation->fails()){
            return redirect()->route('sn_sv')->withErrors($validation);
        }
        $data=Session::get('req');
        $this->repo->storeFromSession($data);
        $all=$this->repo->getAllMembers();
        return view('display',['data'=>$all]);
    }

    public function display(){
        $data= $this->repo->getAllMembers();
        return view('display',['data'=>$data]);
    }
}
