<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactLead;


class ContactLeadMailable extends Mailable
{
    use Queueable, SerializesModels;

    public ContactLead $lead;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactLead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-lead.new-lead');
    }
}
