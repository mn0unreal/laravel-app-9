<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePost extends Notification
{
    use Queueable;
    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }
    
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
