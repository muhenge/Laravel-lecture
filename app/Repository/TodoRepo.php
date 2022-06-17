<?php
namespace App\Repository;

use App\Models\Todo;
use App\Repository\Interfaces\TodoInterface;

class TodoRepo implements TodoInterface{

    protected $model;

    public function __construct(Todo $todo)
    {
        $this->model=$todo;
    }
    public function getTodos()
    {
       return $this->model->all()->sortBy('created_at',0,true);    
    }

    public function createTodo(array $todo)
    {
        return $this->model->create($todo);
    }
    public function findOne($id)
    {
        return $this->model->findOrFail($id);
    }

    public function updateTodo(array $data, $id)
    {
        return $this->model->where('id',$id)->update($data);
    }

    public function deleteTodo($id)
    {
        return $this->model->destroy($id);
    }
}