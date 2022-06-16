<?php
namespace App\Repository;

use App\Repository\Interfaces\TeamMemberInterface;
use App\Models\SessionMdl;


class TeamMemberRepository implements TeamMemberInterface{

   protected $model;
   
   public function __construct(SessionMdl $sModel)
   {
    $this->model=$sModel;
   }

   public function findOne($id){
    return $this->model->findOrFail($id);
   }
    public function getAllMembers()
    {
        return $this->model->all();
    }
    
    public function storeFromSession(array $data)
    {
      return  $this->model->create($data);
    }

    public function update(array $body, $id)
    {
        return $this->model->where('id', $id)->update($body);
    }
    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}