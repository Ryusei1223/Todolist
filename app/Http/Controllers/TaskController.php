<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Task $task)
    {
        $task = new Task;
        return view("index")->with(["tasks"=>$task->get()]);
    }
    public function edit(Task $task)
    {
        $task = new Task;
        return view("edit")->with(["tasks"=>$task->get()]);
    }
    public function delete(Task $task)
    {
        $task = new Task;
        return view("delete")->with(["tasks"=>$task->get()]);
    }
}
 