<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;

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
    
    public function create()
    {
        //createページを表示
        return view('posts/create');
    }
    
    public function store(Post $post, PostRequest $request)
    {
        //ユーザからのリクエストに含まれるデータを使用するため、Requestインスタンスを使用
        //createページで登録したデータが要件を満たしていれば登録する
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        //editページを表示
        return view('posts.edit')->with(['post' => $post]);
    }
    
    public function update(Post $post, PostRequest $request)
    {
        //editページで登録したデータが変更されていれば更新する
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    
}
