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
            <p>本当に削除しますか？</p>
            <p>はい</p>
            <p>いいえ</p>
            <button type="submit" value="実行">[<a href="/">back</a>]</button>
        </div>
    </body>
</html>