<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->paginate(9);

        return view('welcome', compact('posts'));

    }
}
