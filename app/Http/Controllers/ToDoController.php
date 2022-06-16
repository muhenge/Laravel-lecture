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

        return redirect(route('home'));
    }
}
