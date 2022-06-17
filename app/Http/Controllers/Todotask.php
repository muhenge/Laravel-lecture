<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Task;

class Todotask extends Controller
{
    public function index()
    
    {
            $tasks = Task::all();
            return view ('task.index',['tasks'=>$tasks]);;
    }
    
    

    public function create()
    {
        return view('task.create');
    }
    public function store(Request $request)
    {
        $data=['title'=>$request->input('title'),'description'=>$request->input('description')];
       $tasks= Task::create($data)->get();

        return view('task.index',['tasks'=>$tasks]);  
    }
    

    public function edit($id)
    {
        $todotask = Task::find($id);
        return view('tasks.edit',['todotask'=>$todotask]);
    }
  
    
    public function update(Request $request, $id)
    {
        $Todotask = Task::find($id);
        $input = $request->all();
        $Todotask->update($input);
        return redirect('Todotask')->with('flash_message', 'Todotask Updated!');  
    } public function destroy($id)
    {
        Todotask::destroy($id);
        return redirect('Todotask')->with('flash_message', 'Todotask deleted!');  
    }
}
