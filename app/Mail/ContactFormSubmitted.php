<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $review;

    public function __construct($name, $email, $review)
    {
        $this->name = $name;
        $this->email = $email;
        $this->review = $review;
    }

    public function build()
    {
        return $this->subject("Naujas pranešimas iš dermicare kontaktines formos")->view('components.emails.contact');
    }
}
