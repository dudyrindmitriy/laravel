<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PostController extends Controller
{
    public function getAll($order = 'date', $dir = 'desc')
    {
        if ($dir == 'desc')
            $posts = Post::all()->sortByDesc($order);
        else
            $posts = Post::all()->sortBy($order);
        return view('post.show', ['posts' => $posts]);
    }
    public function getOne($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return view('post.404');
        }
        return view('post.showOne', ['post' => $post]);
    }

    public function newPost(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->text = $request->text;
        $post->date = $request->date;
        $post->save();
        return redirect('/post/all');
    }

    public function editPost(Request $request, $id)
    {
        $post = Post::find($id);
        if ($request->method()=='POST') {
            $post->title = $request->title;
            $post->desc = $request->desc;
            $post->date = $request->date;
            $post->text = $request->text;
            $post->save();
            return redirect('/post/all');
        }
        return view('post.editPost', ['post' => $post]);
    }

    public function delPost($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('/post/all');
    }
}
