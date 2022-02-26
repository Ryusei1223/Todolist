<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Category $category)
    {
        return view("category")->with(["categories"=>$category->get()]);
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
    public function store(Category $category,Request $request)
    {
       $input=$request["category"];
       $category->fill($input)->save();
       return redirect("/");
    }
}