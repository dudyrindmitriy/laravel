<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $posts = DB::table('posts')->where('id',5)->value('title');
        dd($posts);
    }
}
