<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class emailMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public function __construct()
    {
        $this->user=Auth::user();
    }
    public function envelope()
    {
        return new Envelope(
            subject: 'Email Mailable',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.email',
        );
    }

    public function attachments()
    {
        return [];
    }
}
