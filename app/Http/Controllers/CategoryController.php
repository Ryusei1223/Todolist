<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use App\Category;
use App\Task;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Category $category,Task $task)
    {
        return view("category")->with(["categories"=>$category->get(),"tasks"=>$task->orderBy("due_date","ASC")->get()]);
    }
    public function add_category()
    {
        return view("add_category");
    }
    public function index(Category $category)
    {
        
        return view("index")->with(["categories"=>$category->get()]);
    }
    public function destroy(Category $category)
    {   
        $category->delete();
        return redirect("/");
        
    }
    public function store(Category $category,CategoryRequest $request)
    {
       $input=$request["category"];
       $category->fill($input)->save();
       return redirect("/");
    }
}