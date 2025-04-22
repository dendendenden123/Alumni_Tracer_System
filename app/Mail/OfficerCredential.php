<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OfficerCredential extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Officer Credential');
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.officerCredential',
            with: [
                'email' => $this->email,
                'password' => $this->password
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
