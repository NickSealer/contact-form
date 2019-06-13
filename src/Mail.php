<?php

namespace Taskuniverse\ContactForm;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;

    public function __construct($mail)
    {
        $this->mail = $mail;
    }

    public function build()
    {
        return $this->view('contactform::mails.send')->subject($this->mail->email.' - '.$this->mail->subject);
    }
}
