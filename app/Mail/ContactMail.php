<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $name;
    // public $email;
    // public $message;
    public $details;
    /**
     * Create a new message instance.
     */
    
    // $request
    public function __construct($details)
    {
        // $this->name = $request->input('name');
        // $this->email = $request->input('email');
        // $this->message = $request->input('message');
        $this->details = $details;
        
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->from($this->details['email'])
                    ->subject('Nouveau message de contact')
                    ->view('user.emails.send-mail');
    }
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Nouveau message de contact',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'user.email.send-email',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
