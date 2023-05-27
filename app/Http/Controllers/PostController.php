<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        //limit_countでpaginateされたメソッドの呼び出し
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    public function show(Post $post)
    {
        //任意idのpostインスタンスをpost変数に格納
        return view('posts.show')->with(['post' => $post]);
    }
    public function create(Post $post)
    {
        return view('posts/create');
    }
}
