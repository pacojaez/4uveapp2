<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $message = '';
    public int $preferred = 0;


    public function render()
    {
        return view('livewire.contact-form');
    }
}
