<!DOCTYPE html>
<html lang=="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class='content'>
            <p class='post_content'>
                {{$post->body}}
            </p>
            <p class="button">
                <button type="button" onClick="history.back()">戻る</button>
            </p>
        </div>
    </body>
</html>