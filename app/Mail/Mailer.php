<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailer extends Mailable
{
    public $details; 


    public function __construct($details)
    {   

        $this->details = $details;
        //$this->from = $from;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->details['from'])
                    ->subject($this->details['title'])
                    ->view('mails.mailer');
    }
}
