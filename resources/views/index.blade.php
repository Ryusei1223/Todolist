@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todoリスト</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       
    </head>
    <body>
        <div>
            <a href="/categories/{{$category}}/create">⊕</a>
             <table class="table">
                <thead>
                    <tr>
                        <th scope="col">予定</th>
                      
                        <th scope="col">期限</th>
                     
                        <th scope="col">編集</th>
                        
                        <th scope="col">削除</th>
                    </tr>
                </thead>
                <tbody>
                        
                        @foreach($tasks as $task)
                        <tr>  
                            <td>{{$task->task}}</td>
                                           
                            <td>{{$task->due_date}}</td>
                                           
                            <td><a href="/categories/{{$task->categories_id}}/tasks/{{$task->id}}/edit">編集</a></td>
                                           
                            <td> <form action="/categories/{{$task->categories_id}}/tasks/{{$task->id}}" id="form_delete{{$task->id}}" method="POST" style="display:inline">
                                    {{csrf_field()}}
                                    {{method_field("delete")}}
                                    <input type ="submit" style="display:none">
                                    <p class ="delete"><span onclick="return deleteTask({{$task->id}});">削除</span></p>
                                </form>
                            </td>
                        <tr>  
                        @endforeach
                    
                </tbody>
            </table>
                    
            <button type="submit" value="実行"><a href="/">戻る</a></button>
            <script>
                function deleteTask(taskId){
                    "use strict";
                    if(confirm("削除すると復元できません。\n本当に削除しますか")){
                        document.getElementById(`form_delete${taskId}`).submit();
                       
                        
                    }
                }
            </script>
        </div>
    </body>
    
</html>
@endsection