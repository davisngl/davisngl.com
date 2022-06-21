<?php

namespace App\Mail;

use App\DTO\EmailMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMessage extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        public EmailMessage $email
    ) {}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        return $this
            ->from($this->email->fromAddress)
            ->subject(sprintf("Message from %s", $this->email->fromAddress))
            ->markdown('mail.contact_message')
            ->with([
                'sender_ip' => $this->email->ip,
                'browser'   => $this->email->userAgent,
                'from'      => $this->email->fromAddress,
                'message'   => $this->email->message,
            ]);
    }
}
