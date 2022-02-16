<?php

namespace App\Http\Controllers;

use App\Task;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Task $task,$id)
    {
        $task = new Task;
        
        //categorys_idが$idと同じデータを抽出
        return view("index",compact("id"))->with(["tasks"=>$task->where("categorys_id",$id)->get()]);
    }
    public function edit(Task $task)
    {
        $task = new Task;
        return view("edit");
    }
    public function delete(Task $task)
    {
        return view("delete");
    }
    public function create(Task $task,$id)
    {
        
        return view("create",compact("id"))->with(["tasks"=>$task->where("categorys_id",$id)->get()]);
    }
    public function store(Task $task,Request $request)
    {
       $input=$request["task"];
       $task->fill($input)->save();
       return redirect("/index/{{$task->categorys_id}}");
    }

}
 