<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send()
    {
        $data = request()->validate([
            'name' => ['required'],
            'email' => ['required'],
            'review' => ['required'],
        ]);


        Mail::to('monika.petraityte.dermicare@gmail.com')->send(
            new ContactFormSubmitted($data['name'], $data['email'], $data['review'])
        );

        return redirect()->route('home');
    }
}
