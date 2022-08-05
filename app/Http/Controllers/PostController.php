<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        //ViewにController内で取得した変数を渡したい場合はViewインスタンスに対してwithメソッドを使用する
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
}
?>