<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();

        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('title', 'like', '%' . request('search') . '%');
        }

        return view('posts', [
            'posts' =>  Post::latest()->filter(request(['search', 'category']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
          return view('post', [
              'post' => $post,
          ]);
    }
}
