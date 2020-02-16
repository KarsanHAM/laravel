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

    public function show(Blog $post)
    {
//        $post = Blog::findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        Blog::create($this->validateArticle());
        return route('posts.index');
    }

    public function edit(Blog $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Blog $post)
    {
        $post->update($this->validateArticle());

        return redirect(route('posts.show', $post));
    }

    /**
     * @return array
     */
    public function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
