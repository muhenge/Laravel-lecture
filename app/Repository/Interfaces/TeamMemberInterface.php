<?php
namespace App\Repository\Interfaces;

interface TeamMemberInterface{

    public function getAllMembers();
    public function storeFromSession(array $sData);
    public function update(array $body,$id);
    public function findOne($id);
    public function destroy($id);
}