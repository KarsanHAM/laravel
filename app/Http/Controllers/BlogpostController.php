<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    public function index()
    {
        $posts = Blog::latest()->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Blog::find($id);

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $blog = new Blog();
        $blog->title = request('title');
        $blog->excerpt = request('excerpt');
        $blog->body = request('body');
        $blog->save();
        return redirect('/blog');
    }

    public function edit($id)
    {
        $post = Blog::find($id);

        return view('posts.edit', ['post' => $post]);
    }

    public function update($id)
    {
        $blog = Blog::find($id);

        $blog->title = request('title');
        $blog->excerpt = request('excerpt');
        $blog->body = request('body');
        $blog->save();

        return redirect('/blog/' . $blog->id);
    }
}
