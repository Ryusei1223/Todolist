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
            <p>新規作成</p>
            <form action = '/categories/{{$category}}' method="POST">
                {{csrf_field()}}
                <p>予定</p>
                <input type="text" name ="task[task]"/>
                <br>
                <p>期限日</p>
                <input type="datetime-local" name ="task[due_date]"/>
                <input type="hidden" name ="task[categories_id]" value="{{$category}}"/>
                <input type="submit" value="登録"/>
            </form>
            <button type="submit" value="実行">[<a href="/">back</a>]</button>
        </div>
    </body>
</html>
@endsection