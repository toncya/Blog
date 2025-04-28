<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Post一覧を表示する
     * 
     * @param Post $post Postモデル
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post ->getPaginateByLimit()]);
    }
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
}