<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\TeamMemberInterface;
use Illuminate\Http\Request;

class TypesOfCotrollers extends Controller
{
  
    protected $repo;
    public $member;

    public function __construct(TeamMemberInterface $member)
    {
        $this->repo= $member;
        $this->member='';
    }

    public function index()
    {
        $members=$this->repo->getAllMembers();

        return view('index',["members"=>$members]);
    }

  
    public function create()
    {
        return view('addmember');   
    }

   
    public function store(Request $request)
    {
        $name=$request->input('name');
        $len = count($this->repo->getAllMembers());
        $totalMembers=$this->repo->getAllMembers();
        $totalMembers[$len+1]=$name;
        return view('index',['members'=>$totalMembers]);
    }

    public function find()
    {
        return view('findmember',['member'=>$this->member]);
    }
 
    public function findMember(Request $request)
    {
    $name=$request->input('name');
    $this->member= $this->repo->findMember($name);
     return view('findmember',['member'=>$this->member]);   
    }


}
