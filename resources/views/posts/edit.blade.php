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
            <!-- PUTリクエストとしてデータを送信する -->
            @method('PUT')
            
            <div class="title">
                <h2>タイトルを入力してください</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title . old('post.title') }}"/>
                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            
            <div class="body">
                <h2>本文を入力してください</h2>
                <textarea name="post[body]" placeholder="本文" >{{ $post->body . old('post.body') }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            
            <input type="submit" value="保存" />
            
            <div class="footer">
                <a href='/'>⇐ Blog Listへ戻る</a>
            </div>
        </form>
    </body>
</html>