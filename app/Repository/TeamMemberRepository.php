<?php
namespace App\Repository;

use App\Repository\Interfaces\TeamMemberInterface;
use App\Models\SessionMdl;


class TeamMemberRepository implements TeamMemberInterface{

   protected $members;
   protected $model;
   
   public function __construct(SessionMdl $sModel)
   {
    $this->members= array('Eugene','Eric','Moses');
    $this->model=$sModel;
   }

    public function getAllMembers()
    {

        return $this->model->all();
    }

    public function addMember(string $name)
    {

        return array_push($this->members,$name);
    }
    public function findMember(string $name)
    {
     $index=array_search($name,$this->members,true);
     return $this->members[$index];   
    }
    
    public function storeFromSession(array $data)
    {
        $this->model->create($data);
    }
}