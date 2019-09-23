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

     public $mail;

    public function __construct($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'anaelle.alenda@gmail.com';
        $name = 'Anaëlle';
        $subject = 'Email contact';

    return $this->view('pages.contact.email')
                ->from($address, $name)
                ->subject($subject);


    }
}
