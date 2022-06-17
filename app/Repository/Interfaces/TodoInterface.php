<?php

namespace App\Repository\Interfaces;

interface TodoInterface
{
    public function getTodos();
    public function createTodo(array $todo);
    public function findOne($id);
    public function updateTodo(array $data,$id);
    public function deleteTodo($id);
}
