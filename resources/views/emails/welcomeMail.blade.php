@component('mail::message')
# Gracias por confiar en 4uve


Es un placer que formes parte de lo que queremos sea una gran familia y podamos ayudarnos entre todos.

@component('mail::button', ['url' => 'mail::url'])
Visitar Tienda
@endcomponent

Gracias,<br>
{{ config('app.name') }}
{{ config('mail.name') }}
{{ config('mail.address') }}
@endcomponent
