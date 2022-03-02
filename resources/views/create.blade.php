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
            <p>新規作成</p>
            <form action = '/categories/{{$category}}' method="POST">
                {{csrf_field()}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">予定</label>
                    <input type="text" name ="task[task]" class="form-control" id="exampleFormControlInput1" placeholder="予定を入力してください"/>
                    <p class="title__error" style="color:red">{{ $errors->first('task.task') }}</p>
                </div>
                <br>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">期限</label>
                    <input type="datetime-local" name ="task[due_date]" class="form-control" id="exampleFormControlInput1" placeholder="日時を入力してください"/>
                    <p class="title__error" style="color:red">{{ $errors->first('task.due_date') }}</p>
                    <input type="hidden" name ="task[categories_id]" value="{{$category}}"/>
                    <input type="submit" value="登録"/>
                </div>
            </form>
            <button type="submit" value="実行"><a href="/">戻る</a></button>
       
    </body>
</html>
@endsection