<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
public function index()
{
    $posts = Post::all();
        return view('welcome', compact('posts'));
}
}
