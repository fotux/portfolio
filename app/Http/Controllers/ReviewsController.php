<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Reviews::select('id', 'name', 'review', 'rating')->get();
        return view('components.test', \compact('reviews'));
    }

}
