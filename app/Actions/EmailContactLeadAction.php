<?php

namespace App\Actions;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactLeadMailable;
use App\Models\ContactLead;

class EmailContactLeadAction
{
    public function __invoke(array $formData)
    {
        $contactLead = $this->getOrCreateContactLead($formData);
        $this->sendContactLeadToEmail($contactLead);
    }

    private function getOrCreateContactLead(array $formData): ContactLead
    {
        return ContactLead::firstOrCreate($formData);
    }

    private function sendContactLeadToEmail(ContactLead $contactLead): void
    {
        Mail::to(['new-contact-lead@contact-form.test'])
        ->send(new ContactLeadMailable($contactLead));
    }
}
