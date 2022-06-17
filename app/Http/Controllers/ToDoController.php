<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

use App\Models\ToDo;

class ToDoController extends Controller
{
    public function home()
    {
        $result = DB::table('to_dos')->orderBy('id','DESC')->get();
        return view('task.todos', compact('result'));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
                'title' => 'required|regex:/^[a-zA-Z ]+$/'
            ]);

        $title = $request->input('title');
        $desc = $request->input('desc');

        $data = ToDo::create([
            'title' => $title, 
            'description' => $desc
        ]);

        return redirect(route('todoDashboard'));
    }

    public function edit($id)
    {
        $result = DB::table('to_dos')->orderBy('id','DESC')->where('id', $id)->get();
        return view('demo.edit', compact('result'));
    }
    public function delete($id)
    {
        DB::table('to_dos')
                ->where('id', $id)
                ->delete();
        return redirect(route('todoDashboard'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
                'title' => 'required|regex:/^[a-zA-Z ]+$/'
            ]);

        $id = $request->input('id');
        $title = $request->input('title');
        $desc = $request->input('desc');

        DB::table('to_dos')
                ->where('id', $id)
                ->update(['title' => $title, 'description' => $desc]);
        
        return redirect(route('todoDashboard'));
    }
}
