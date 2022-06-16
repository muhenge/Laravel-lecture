<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function taskform()
    {
        return view('task.create');
    }
    
    public function store(Request $data)
    {
        Task::create([
            'title' => $data['task'],
            'description' => $data['desc'],
        ]);
        return redirect()->route('task')->with('success', 'task stored successful');
    }

    public function select()
    {
        // $tasks = Task::all()->orderByDesc('id');
        $tasks = DB::table('tasks')
           ->orderByDesc('id')
           ->get();
        
        return view('task.index', compact('tasks'));
    }
}
