<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Carbon;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Markdown;

class RequestChange extends Mailable
{
    use Queueable, SerializesModels;

    public $gymnast;
    public $event;
    public $apparatus;
    public $round;

    /**
     * Create a new message instance.
     */
    public function __construct(string $gymnast, string $event, string $apparatus, string $round)
    {
        $this->gymnast = $gymnast;
        $this->event = $event;
        $this->apparatus = $apparatus;
        $this->round = $round;
        $this->date = Carbon::now();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Solicitud de cambios de puntuación',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mails.requestMail',
            with: [
                'gymnast' => $this->gymnast,
                'event' => $this->event,
                'apparatus' => $this->apparatus,
                'round' => $this->round,
                'date' => $this->date,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
