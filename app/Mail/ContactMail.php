<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $company;
    public $email;
    public $contact_message;

    public function __construct($name, $company, $email, $contact_message)
    {
        $this->name = $name;
        $this->company = $company;
        $this->email = $email;
        $this->contact_message = $contact_message;
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'A New Contact Message');
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.contact',
            with: [
                'name' => $this->name,
                'company' => $this->company,
                'email' => $this->email,
                'contact_message' => $this->contact_message,
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
