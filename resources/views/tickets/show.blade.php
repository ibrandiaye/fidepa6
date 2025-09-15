@extends('layout')

@section('content')
<div class="container text-center py-5">
    <h1 class="mb-4 text-success">🎉 Ticket valide</h1>

    <div class="card shadow-lg p-4 mx-auto" style="max-width: 500px;">
        <h3>{{ $ticket->prenom }} {{ $ticket->nom }}</h3>
        <p><strong>Email :</strong> {{ $ticket->email }}</p>
        <p><strong>Pays :</strong> {{ $ticket->pays }}</p>
        <p><strong>Téléphone :</strong> {{ $ticket->tel }}</p>
        <hr>
        <p class="text-muted">Code : <strong>{{ $ticket->code }}</strong></p>
        <span class="badge bg-success">✔ Inscription confirmée</span>
    </div>
</div>
@endsection
