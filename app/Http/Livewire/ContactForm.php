<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Actions\EmailContactLeadAction;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $message = '';
    public int $preferred = 0;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|min:4',
        'phone' => 'nullable|min:4|required_if:preferred,1',
        'message' => 'nullable',
        'preferred' => 'required|min:0|max:1'
    ];

    protected $messages = [
        'phone.required_if' => 'Necesitamos tu teléfono para ponersnos en contacto contigo.',
    ];

    public function submit()
    {
        $validated = $this->validate();

        (new EmailContactLeadAction)($validated);

        session()->flash('contact-lead-message', 'Mensaje recibido, nos pondremos en contacto contigo.');

        redirect()->to('/contact');

    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
