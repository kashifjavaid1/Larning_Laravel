<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Gmail extends Mailable // Class name should start with an uppercase letter
{
    use Queueable, SerializesModels;

    public $msg;
    public $sub;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg, $subject) // Change $subject to $sub
    {
        $this->msg = $msg;
        $this->sub = $subject; // Corrected assignment
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->sub,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail',
            // You can also pass data to the view
            with: [
                'message' => $this->msg,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
