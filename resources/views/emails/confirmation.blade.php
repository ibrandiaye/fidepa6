<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

    <h4>{{ __('messages.team') }}</h4>

    <p>{!! __('messages.hello', ['name' => $participant['nom']]) !!}</p>

    <p>{!! __('messages.thanks', ['event' => $eventTitle]) !!}</p>

    <p>{{ __('messages.attachment') }}</p>

    <p>{!! __('messages.regards') !!}</p>
</body>
</html>
