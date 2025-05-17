<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BlogImage;
use Illuminate\Support\Facades\Log;
use function Avifinfo\read;

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

    public function create()
    {
        return view('components.blog.blog-create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required'],
            'paragraph' => ['required'],
            'image_path' => ['required', 'min:1'],
            'image_path.*' => ['image', 'max:2048', 'mimes:png,jpg,jpeg'],
        ]);

        $blog = Blog::create([
            'title' => request('title'),
            'paragraph' => request('paragraph')
        ]);

        if (request()->hasFile('image_path')) {
            foreach (request('image_path') as $image) {
                $path = $image->store('blog_images', 'public');

                BlogImage::create([
                    'blog_id' => $blog->id,
                    'image_path' => $path,
                ]);
            }
        };

        return redirect()->route('blog');
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog');
    }
}
