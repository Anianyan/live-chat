<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendChatEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $user_name;
    protected $user_message;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->user_message = $details['message'];
        $this->user_name = $details['user_name'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.chat-message', ['user_name' => $this->user_name, 'user_message' => $this->user_message]);
    }
}
