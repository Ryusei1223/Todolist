<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todoリスト</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       
    </head>
    <body>
        <p>新規作成</p>
        <p >[<a href="/index/{{$id}}/create">⊕</a>]</p>
        <p>編集</p>
        <p>削除</p>
        @foreach($tasks as $task)
                        <h2>{{$task->task}}</h2>
                        <p>{{$task->due_date}}</p>
        @endforeach
        <button type="submit" value="実行">[<a href="/">back</a>]</button>
  
    </body>
</html>
