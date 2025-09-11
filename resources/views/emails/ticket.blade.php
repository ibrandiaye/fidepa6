@component('mail::message')
Bonjour {{ $ticket->prenom ?? ''  }} {{ $ticket->nom ?? ''  }},

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}
Merci pour votre inscription au **FIDEPA 6**
Voici votre **code unique** : **{{ $ticket->code_unique ?? ''  }}**

Votre QR Code est en pièce jointe.
Présentez-le à l’entrée de l’événement.

Merci,<br>
{{ config('app.name') }}
@endcomponent
