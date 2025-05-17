<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;

class ReviewsController extends Controller
{
    public function index()
    {
        $blog = Blog::with('images')->get();
        $reviews = Reviews::select('id', 'name', 'review', 'rating')->get();
        return view('index', compact('reviews', 'blog'));
    }


    public function create()
    {

        return view('components.reviews.review');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'review' => ['required'],
            'rating' => ['required', 'integer', 'between:1,5']
        ]);

        $reviews = Reviews::create([
            'name' => $request->input('name'),
            'review' => $request->input('review'),
            'rating' => $request->input('rating')
        ]);
        return redirect()->route('home');
    }

    public function edit(Reviews $review)
    {
        return view('components.reviews.review-edit', ['review' => $review]);
    }

    public function update(Request $request, Reviews $review)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'review' => ['required'],
            'rating' => ['required', 'integer', 'between:1,5']
        ]);

        $review->update([
            'name' => $request->input('name'),
            'review' => $request->input('review'),
            'rating' => $request->input('rating')
        ]);

        return redirect()->route('home');
    }

    public function delete(Reviews $review)
    {
        $review->delete();

        return redirect()->route('home');
    }
}
