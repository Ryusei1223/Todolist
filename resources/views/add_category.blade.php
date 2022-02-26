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
            <p>カテゴリ追加</p>
            <form action = "/" method="POST">
                {{csrf_field()}}
                <input type="text" name ="category[title]"/>
                <input type="submit" value="登録"/>
            </form>
              <button type="submit" value="実行">[<a href="/">戻る</a>]</button>
        </div>
    </body>
</html>
@endsection