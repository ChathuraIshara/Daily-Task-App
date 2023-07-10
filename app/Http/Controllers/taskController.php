<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class taskController extends Controller
{
    public function store(Request $request)
    {
        $task=new task;

        $this->validate($request,[
            'task'=>'required|max:100|min:5'
        ]);


       $task->task=$request->task;
       $task->save();
       $data=task::all();
       //dd($data);
       return view('task')->with('tasks',$data);
    }
    
}
