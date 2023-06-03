<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog edit</title>
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <h1>Blog edit</h1>
        
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="title">
                <h2>タイトルを入力してください</h2>
                <input type="text" name="post[title]" value="{{ $post->title }}"/>
                
            </div>
            
            <div class="body">
                <h2>本文を入力してください</h2>
                <textarea name="post[body]" >{{ $post->body }}</textarea>
                
            </div>
            
            <input type="submit" value="保存" />
            
            <div class="footer">
                <a href='/'>⇐ Blog Listへ戻る</a>
            </div>
        </form>
    </body>
</html>