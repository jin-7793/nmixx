<!DOCTYPE html>
<html lang=="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
            <form action='/posts' method='POST'>
                @csrf
                <div class='title'>
                    <h2>title</h2>
                    <input type='text' name='post[title]' placeholder='本日の記録'>
                </div>
                <div class='post'>
                    <h2>body</h2>
                    <textarea type="text" name='post[body]' placeholder='はらへったなぁ。'></textarea>
                </div>
                <input type='submit' value='保存'>
            </form>
        <p class="button">
            <button type="button" onClick="history.back()">戻る</button>
        </p>
    </body>
</html>