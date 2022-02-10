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
        <div>
            <h1>Todoリスト</h1>
            <p class="add_category">[<a href="/add_category">⊕</a>]</p>
            @foreach($categories as $category)
                <div class = categories>
                    <a href="/index/{{$category->id}}"><h2 class ="title">{{$category->title}}</h2></a>
                </div>
            @endforeach
        </div>
    </body>
</html>