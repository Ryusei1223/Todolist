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
        <h1>一覧ページ</h1>
        @foreach($tasks as $task)
                    <div class = tasks>
                        <p>予定</p>
                        <h2 class ="task">{{$task->task}}</h2>
                        <p>期限日</p>
                        <p class ="due_date">{{$task->due_date}}</p>
                        <p>[<a href="/index/{{$task->id}}/edit">編集</a>]</p>
                        <p>[<a href="/index/{{$task->id}}/delete">削除</a>]</p>
                    </div>
        @endforeach
        <button type="submit" value="実行">[<a href="/">back</a>]</button>
  
    </body>
</html>
