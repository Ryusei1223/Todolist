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
       <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">カテゴリ追加</label>
           <form action = "/" method="POST">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="予定を入力してください" name ="category[title]"/>
                <p class="title__error" style="color:red">{{ $errors->first('category.title') }}</p>
                <br>
                {{csrf_field()}}
                <input type="submit" class="btn btn-info" value="登録"/>
            </form>
       </div>
       <button type="submit" class="btn btn-light" ><a href="/">戻る</a></button>
        
    </body>
</html>
@endsection