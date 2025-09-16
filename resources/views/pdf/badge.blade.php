<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: DejaVu Sans, sans-serif; text-align: center; padding: 50px; }
        .badge {
            border: 2px solid #000;
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            margin: auto;
        }
        h1 { font-size: 22px; margin-bottom: 20px; }
        h2 { font-size: 18px; margin-top: 10px; }
        .qrcode { margin-top: 20px; }
        .partner-logo {
  max-height: 50px;
  max-width: 80px;
}
 /* DOMPDF-friendly: évite flexbox */
    .partners {
      text-align: center;
      white-space: nowrap; /* force une ligne */
      padding-top: 10px;
    }
    .partners .item {
      display: inline-block;
      vertical-align: middle;
      margin: 0 12px;
      page-break-inside: avoid;
    }
    .partner-logo {
      display: block;
      max-height: 80px; /* ajuste selon besoin */
      width: auto;
      height: auto;
    }

    </style>
</head>
<body>
    <div class="badge">

         <div class="qrcode">
          <img src="{{ public_path('logo/fidepas.png') }}" width="200" alt="QR Code">


        </div>
        <h1>{{ $eventTitle }}</h1>
        <h2>{{ $participant['prenom'] }} {{ $participant['nom'] }}</h2>
       {{--  <p>{{ __('messages.phone') }} : {{ $participant['tel'] }}</p>
        <p>{{ __('messages.email') }} : {{ $participant['email'] }}</p> --}}
         <p>{{ __('messages.structure') }} : {{ $participant['organisation'] }}</p>
         <p>{{ __('messages.country') }} : {{ $participant['pays'] }}</p>

        <div class="qrcode">
          <img src="data:image/png;base64, {!! $qrcode !!}" width="200" alt="QR Code">

        </div>

       <div class="partners">

    <div class="item">
        <img src="{{ public_path('logo/mct.png') }}" alt="Partenaire 1" class="partner-logo">
    </div >
    <div class="item">
        <img src="{{ public_path('logo/oidp.png') }}" alt="Partenaire 2" class="partner-logo">
    </div>
    <div class="item">
        <img src="{{ public_path('logo/ael.png') }}" alt="Partenaire 3" class="partner-logo">
    </div>
    <div class="item">
        <img src="{{ public_path('logo/enda.png') }}" alt="Partenaire 4" class="partner-logo">
    </div>
</div>


    </div>
</body>
</html>
