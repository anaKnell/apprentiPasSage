<?php

namespace App\models;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $mails;

         public function __construct(Array $mail)
    {
        $this->mails = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = '';
        $name = '';
        $subject = 'Email contact';

    return $this->view('pages.contact.email')
                ->from($address, $name)
                ->subject($subject);


    }
}
