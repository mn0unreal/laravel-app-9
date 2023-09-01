<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMailUsers extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Send Mail Users',
        );
    }

    public function content()
    {
        return new Content(
            markdown: 'emails.mail',
        );
    }

    public function attachments()
    {
        return [];
    }
}
