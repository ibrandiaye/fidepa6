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
      margin-top: 10px;
    }
    .partners .item {
      display: inline-block;
      vertical-align: middle;
      margin: 12px 9px;
      page-break-inside: avoid;
    }
    .partner-logo {
      display: block;
      height: 40px; /* ajuste selon besoin */
      max-width: 120px;

    }

    </style>
</head>
<body>
    <div class="badge">

         <div class="qrcode">
          <img src="{{ asset('logo/fidepas.png') }}" width="100" alt="QR Code">


        </div>
        <h1>qsddddddd</h1>
        <h2>wxdwdsdqsddsqdsqdd</h2>
       {{--  <p>{{ __('messages.phone') }} : {{ $participant['tel'] }}</p>
        <p>{{ __('messages.email') }} : {{ $participant['email'] }}</p> --}}
         <p>{{ __('messages.structure') }} : wxwdds</p>
         <p>{{ __('messages.country') }} QSqsqsss</p>

        <div class="qrcode">
          <img src="{{ asset('qrcodes/FDP68C1B0BCC604B.svg') }}" width="150" alt="QR Code">

        </div>

       <div class="partners">

    <div class="item">
        <img src="{{ asset('logo/mct.png') }}" alt="Partenaire 1" class="partner-logo">
    </div >
    <div class="item">
        <img src="{{ asset('logo/oidp.png') }}" alt="Partenaire 2" class="partner-logo">
    </div>
    <div class="item">
        <img src="{{ asset('logo/ael.png') }}" alt="Partenaire 3" class="partner-logo">
    </div>
    <div class="item">
        <img src="{{ asset('logo/enda.png') }}" alt="Partenaire 4" class="partner-logo">
    </div>
</div>


    </div>
</body>
</html>
