<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $userData;
    public function __construct($userData)
    {
        $this->userData = $userData;
    }
    public function build()
    {
        return $this->view('emails.emailScript', [
            'userData'=>$this->userData
        ]);
    }
}
