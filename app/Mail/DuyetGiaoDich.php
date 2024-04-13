<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\GiaoDich;

class DuyetGiaoDich extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    use Queueable, SerializesModels;

    protected $giaoDich;

    public function __construct(GiaoDich $giaoDich)
    {

        $this->giaoDich = $giaoDich;
    }

    public function build()
    {
        $giaoDich = $this->giaoDich;
        return $this->subject('Giao dịch của bạn đã được duyệt')
            ->view('emails.duyetgiaodich', compact('giaoDich'))
            ->with([
                'giaoDich' => $this->giaoDich,
            ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🎉 [Thông báo] Giao dịch của bạn đã được duyệt! 🎉',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.duyetgiaodich',
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
