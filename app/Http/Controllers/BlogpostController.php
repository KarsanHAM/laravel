<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    public function show($id)
    {
    $post = Blog::find($id);

    return view('posts.show', ['post' => $post]);
    }
}
