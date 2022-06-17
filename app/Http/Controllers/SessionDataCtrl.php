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
        return view('sessionwork.create');
    }

    public function storeSessiondata(Request $request){
        $validation= Validator::make($request->all(),['name' => 'required', 'email'=> 'required|unique:session_mdls']);
        if($validation->fails()){
            return redirect()->route('sn_sv')->withErrors($validation)->withInput();
        }
        $data=Session::get('req');
        $this->repo->storeFromSession($data);
        $all=$this->repo->getAllMembers();
        return view('sessionwork.display',['data'=>$all]);
    }

    public function display(){
        $data= $this->repo->getAllMembers();
        return view('sessionwork.display',['data'=>$data]);
    }

    public function edit($id){
        $member= $this->repo->findOne($id);
        return view('sessionwork.edit',['member'=>$member]);
    }
    public function update(Request $request,$id){
        $body=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
        ];
        $this->repo->update($body,$id);
        return redirect()->route('display')->with('msg','Updated successfully');
    }

    public function destroy($id){
        
        if($this->repo->destroy($id)){
            return redirect()->back()->with('msg','Deleted successfully');
        }
    }
}
