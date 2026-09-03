<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEnquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry;

    public function __construct(array $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this
            ->subject('New website enquiry: ' . $this->enquiry['subject'])
            ->replyTo($this->enquiry['email'], $this->enquiry['name'])
            ->view('emails.contact-enquiry');
    }
}
