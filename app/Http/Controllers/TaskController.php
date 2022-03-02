<?php

namespace App\Http\Controllers;
use App\Http\Requests\TaskRequest;

use App\Task;
use App\Category;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    
    public function index(Task $task,$category)
    { 
        
        //categorys_idが$idと同じデータを抽出
        return view("index",compact("category"))->with(["tasks"=>$task->where("categories_id",$category)->orderBy("due_date","ASC")->get()]);
    }
    public function edit($category, Task $task)
    { 
        return view("edit")->with(["task"=>$task,"category"=>$category]);
    }
    public function destroy($category,Task $task)
    { 
         
         $task->delete();
        return redirect("/categories/".$category);
    }
    public function create($category)
    {
        
        return view("create",compact("category"));
    }
    public function store(Task $task,TaskRequest $request,$category)
    {
       $input=$request["task"];
       $task->fill($input)->save();
       return redirect("/categories/". $category);
    }
    public function update(Request $request,$category,Task $task)
        {  
           $input=$request["task"];
           $task->fill($input)->save();
           return redirect("/categories/".$category);
        }
   
}
 