<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\TodoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoCtrl extends Controller
{

    protected $todoService;

    public function __construct(TodoInterface $todo)
    {
        $this->todoService=$todo;
    }
    
    public function index()
    {
        $todos=$this->todoService->getTodos();  
        return view('todoViews.index',['todos'=>$todos]);
    }


    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), ['title' => 'required', 'description' => 'required|max:350']);
        if ($validation->fails()) {
            return redirect()->route('todo.index')->withErrors($validation);
        }
        $this->middleware('valid');
        $body=['title'=>$request->input('title'),'description'=>$request->input('description')];
        $this->todoService->createTodo($body);
        return redirect()->route('todo.index');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $todo=$this->todoService->findOne($id);
        return view('todoViews.edit',['todo'=>$todo]);
    }

   
    public function update(Request $request, $id)
    {
        $data=['title'=>$request->input('title'),'description'=>$request->input('description')];
        $this->todoService->updateTodo($data,$id);
        return redirect()->route('todo.index')->with('mesg','Updated successfully');
    }

 
    public function destroy($id)
    {
        $this->todoService->deleteTodo($id);
        return redirect()->route('todo.index');
    }
}
