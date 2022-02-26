@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <br>
        <title>Todoリスト</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       
    </head>
    <body>
        
           
            <p class="add_category"><a href="/add_category">⊕</a></p>
            @foreach($categories as $category)
            
            <div class="container">
                <div class="row">
                    <div class="col-3">
                            <a href="categories/{{$category->id}}" class="category_name"><p class ="title">{{$category->title}}</p></a>
                    </div>
                    <div class="col">
                            <form action="/categories/{{$category->id}}/delete" id="form_delete{{$category->id}}" method="POST" style="display:inline">
                                        {{csrf_field()}}
                                        {{method_field("delete")}}
                                        <input type ="submit" style="display:none">
                                        <p class ="delete"><span onclick="return deleteCategory({{$category->id}});">⊖</span></p>
                            </form>
                    </div>
                </div>
            </div>
                
            @endforeach
            
            
        
            <div class="all_task">
                
            </div>
            <script>
                function deleteCategory(categoryId){
                    "use strict";
                    if(confirm("削除すると復元できません。\n本当に削除しますか")){
                        document.getElementById(`form_delete${categoryId}`).submit();
                        
                    }
                }
             </script>
        </div>
    </body>
</html>
@endsection