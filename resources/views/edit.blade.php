@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <title>Todoリスト</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       
    </head>
    <body>
        <div>
            <p>編集する</p>
            <form action ="/categories/{{$category}}/tasks/{{$task->id}}" method="POST">
                {{@csrf_field()}}
                {{ method_field('PUT') }}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">予定</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$task->task}}" name="task[task]" value="{{$task->task}}"/>
                </div>
                <br>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">期限</label>
                    <input type = "datetime-local" class="form-control" id="exampleFormControlInput1" placeholder="{{$task->name}}" name="task[due_date]" value="{{$task->due_date}}"/>
                </div>
                <br>
                <input type="submit" value="変更"/>
            </form>
            <button type="submit"><a href="/categories/{{$category}}">戻る</a></button>
        </div>
    </body>
</html>
@endsection