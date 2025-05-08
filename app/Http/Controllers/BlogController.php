<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::select('id', 'title', 'paragraph')->get();
        return view('blog', compact('blog'));
    }

    public function view(Blog $blog)
    {
        return view('components.blog.view-blog', ['blog' => $blog]);
    }
}
