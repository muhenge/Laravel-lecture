<?php
namespace App\Repository\Interfaces;

interface TeamMemberInterface{
    public function addMember(string $name);
    public function findMember(string $name);
    public function getAllMembers();
    public function storeFromSession(array $sData);

}