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
}
 
 