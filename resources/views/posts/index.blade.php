<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog list</title>
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <h1>Blog Name</h1>
        
        <div class="create">
            <a href="/posts/create">投稿する</a>
        </div>
        
        <div class="posts">
            <!-- foreachで、postsから取ってきたDBの情報を取り出し、件数に達するまで下を繰り返す -->
            @foreach($posts as $post)
            <div class="report">
                <h2 class="title">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
            </div>
            <!-- ここまでを繰り返し、件数に達したら、繰り返しを終了する -->
            @endforeach
        </div>
        
        <div class="paginate">
            {{ $posts->links() }}
        </div>
    </body>
</html>