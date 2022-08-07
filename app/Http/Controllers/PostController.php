<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
        //ViewにController内で取得した変数を渡したい場合はViewインスタンスに対してwithメソッドを使用する
        return view('posts/index')->with(['posts' => $post->getPaginate()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Post $post, PostRequest $request) // 引数をRequest->PostRequestにする
    {
        //$requestのキーはcreate.blade.phpのformタグ内で定義したname属性（タイトルと本文を指す）と一致
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}