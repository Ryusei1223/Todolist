<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Category $category)
    {
        $category = new Category;
        
        return view("category")->with(["categories"=>$category->get()]);
    }
    public function add_category(Category $category)
    {
        $category = new Category;
        
        return view("add_category");
    }
    public function index(Category $category)
    {
        $category = new Category;
        
        return view("index");
    }
}