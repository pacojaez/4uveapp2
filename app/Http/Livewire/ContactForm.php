<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Actions\EmailContactLeadAction;
use Illuminate\Http\Request;
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
        'preferred' => 'required|min:0|max:1',
        'g-recaptcha-response' => 'required|captcha'

    ];

    protected $messages = [
        'phone.required_if' => 'Necesitamos tu teléfono para ponersnos en contacto contigo.',
    ];

    public function submit(Request $request)
    {
        /**
         * RECAPTCHA
         */

        // $url = 'https://www.google.com/recaptcha/api/siteverify';
        // $remoteip = $_SERVER['REMOTE_ADDR'];
        // $data = [
        //         'secret' => config('services.recaptcha.secret'),
        //         'response' => $request->get('recaptcha'),
        //         'remoteip' => $remoteip
        //       ];
        // $options = [
        //         'http' => [
        //           'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        //           'method' => 'POST',
        //           'content' => http_build_query($data)
        //         ]
        //     ];
        // $context = stream_context_create($options);
        // $result = file_get_contents($url, false, $context);
        // $resultJson = json_decode($result);

        // if ($resultJson->success != true) {
        //         return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        //         }
        // if ($resultJson->score >= 0.3) {
        //         //Validation was successful, add your form submission logic here
        //         return back()->with('message', 'Thanks for your message!');
        // } else {
        //         return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        // }
        // dd($resultJson);
        /**
         * end RECAPTCHA
        */

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
