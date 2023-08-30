<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePost extends Notification
{
    use Queueable;
    private $post_id;
    private $user_create;
    private $title;

    public function __construct($post_id,$user_create,$title)
    {
       $this->post_id = $post_id;
       $this->user_create = $user_create;
       $this->title = $title;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'post_id'=>$this->post_id,
            'user_create'=> $this->user_create,
            'title'=> $this->title,
        ];
    }
}
