<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Casual extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $subject;
    public $recipient;
    public $email_body;

    public function __construct($subject,$recipient,$email_body)
    {
        $this->subject=$subject;
        $this->recipient=$recipient;
        $this->email_body=$email_body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.casual')->subject($this->subject);
    }
}
