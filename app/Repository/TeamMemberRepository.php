<?php
namespace App\Repository;

use App\Repository\Interfaces\TeamMemberInterface;


class TeamMemberRepository implements TeamMemberInterface{

   protected $members;
   
   public function __construct()
   {
    $this->members= array('Eugene','Eric','Moses');
   }

    public function getAllMembers()
    {

        return $this->members;
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
 
}