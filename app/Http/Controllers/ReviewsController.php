<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Models\User;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Reviews::select('id', 'name', 'review', 'rating')->get();
        return view('index', \compact('reviews'));
    }


    public function create()
    {

        return view('components.reviews.komentaras');
    }
    public function store()
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'review' => ['required'],
            'rating' => ['required', 'min:1', 'max:5']
        ]);

        $review = Reviews::create([
            'name' => request('name'),
            'review' => request('review'),
            'rating' => request('rating')
        ]);
        // dd('hehllo');
        return redirect('/');
    }
}
