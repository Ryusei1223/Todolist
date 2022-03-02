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
        <h2 class="add_category"><a href="/add_category">⊕</a></h2>
        
                <div class="container">
                    @foreach($categories as $category)
                        <div class="row">
                            <div class="col-2">
                                <a href="categories/{{$category->id}}" class="category_name">
                                    <h3 class ="title">{{$category->title}}</h3>
                                </a>
                            </div>
                            <div class="col">
                                <form action="/categories/{{$category->id}}/delete" id="form_delete{{$category->id}}" method="POST" style="display:inline">
                                    {{csrf_field()}}
                                    {{method_field("delete")}}
                                    
                                    <input type ="submit" style="display:none">
                                    
                                    <p class ="delete">
                                        <span onclick="return deleteCategory({{$category->id}});">⊖</span>
                                    </p>
                                    
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>                         
                   
                
               
        <table class="table" id=task_table>
            <thead>
                <tr>
                      <th scope="col">予定一覧</th>
                      <th scope="col">期限</th>
                </tr>      
            </thead>
            <tbody>
                @foreach($tasks as $task)
                        <tr>    
                                <td><p>{{$task->task}}</p></td>
                            
                                <td><p>{{$task->due_date}}</p></td>
                        </tr>      
                @endforeach
            </tbody>
        </table>
            
        
           
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