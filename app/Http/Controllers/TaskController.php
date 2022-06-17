<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function taskform()
    {
        return view('task.create');
    }
    
    public function store(Request $data)

    {
        $message = validator::make($data->all(),[
            'desc'=>'required|string|max:350',
            'task' =>'required|regex:/^[a-zA-Z\s]*$/',
        ])->validate();

        Task::create([
            'title' => $data['task'],
            'description' => $data['desc'],
        ]);
        return redirect()->route('task')->with('success', 'task stored successful');
    }

    public function select()
    {
        // $tasks = Task::all()->orderByDesc('id');
        $tasks = DB::table('tasks')->orderByDesc('id')->get();
        return view('task.index', compact('tasks'));
    }

    public function edit($id)
    {
        $task= Task::find($id);
        return view('task.edit', compact('task'));
    }

    public function update(Request $data, $id)
    {
        $task = Task::find($id);
        $task->title = $data->task;
        $task->description = $data->desc;
        $task->save();
        return redirect()->route('task')->with('success', 'task updated successful');
    }

    public function destroy(Task $task, $id)
    {
        $task->find($id)->delete();
        return redirect()->route('task')->with('success', 'task deleted successful');
    }
}
