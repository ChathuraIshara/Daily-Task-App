<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class taskController extends Controller
{
    public function save(Request $request)
    {
        $task=new task;

        $this->validate($request,[
            'task'=>'required|max:100|min:5'
        ]);


       $task->task=$request->task;
       $task->save();
       $data=task::all();
       //dd($data);
       //return view('task')->with('tasks',$data);
       return redirect()->route('task.show')->with('tasks',$data);
    }
    public function markCompleted($id)
    {
        $task=task::find($id);
        $task->isCompleted=1;
        $task->save();

        // $data=task::all();

        // return view('task')->with('tasks',$data);

        return redirect()->back();
    }
    public function show()
    {

        $data=task::all();
        return view('task')->with('tasks',$data);
    }

    public function markNotCompleted($id)
    {
        $task=task::find($id);
        $task->isCompleted=0;
        $task->save();
        return redirect()->back();
    }
    public function deleteTask($id)
    {
        $task=task::find($id);
        $task->delete();
        return redirect()->back();
    }
    public function updateTask($id)
    {
        $task=task::find($id);
        return view('updatefrontend')->with('tasks',$task);
    }
    public function updateTaskDb(Request $request)
    {
        $task=task::find($request->id);
        $task->task=$request->newtask;
        $task->save();
       // dd($request->all());
        $data=task::all();
       return redirect()->route('task.show')->with('tasks',$data);
    
    }
    public function cancelUpdate()
    {
        $data=task::all();
        return redirect()->route('task.show')->with('tasks',$data);
    }
    
}
