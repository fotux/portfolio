<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BlogImage;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::select('id', 'title', 'paragraph')->get();
        return view('blog', compact('blog'));
    }

    public function view(Blog $blog)
    {
        // calling a function images from model blog

        $blogImages = $blog->images;

        return view('components.blog.view-blog', compact('blog', 'blogImages'));
    }
}
