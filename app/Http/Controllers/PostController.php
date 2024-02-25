<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                "id" => 1,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 2,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 3,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ]
        ];
        return view('post.test', [
            'var1' => '1',
            'var2' => '2',
            'title' => 'page title',
            'text' => 'page content'
        ]);
    }
    public function show($id)
    {
        $posts = [
            [
                "id" => 1,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 2,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 3,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ]
        ];
        return $posts[$id - 1];
    }
    public function store(Request $request)
    {
        return $request->name;
    }
    public function update(Request $request, $id)
    {
        return [
            'update' => true
        ];
    }
    public function destroy($id)
    {
        return [
            'delete' => true
        ];
    }
}
