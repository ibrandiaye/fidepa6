@extends('layout')
@section('title', '| participant')


@section('content')
<div class="row">

    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Departement </a></li>
                </ol>
            </div>
            <h4 class="page-title">Liste Participant</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @endif
        @php
         $user = Auth::user();
        @endphp

        <div class="card ">
            <div class="card-header">LISTE D'ENREGISTREMENT DES Participants</div>
            <div class="card-body">
                {{-- <form method="POST" action="{{ route('search.participantment') }}">

                <div class="row">
                        @csrf
                        <input type="hidden" name="semaine" value="{{$semaine}}">
                        <div class="col-lg-2">
                            <label>Region</label>
                            <select class="form-control" name="region_id" id="region_id" required="">
                                <option value="">Selectionnez</option>
                                @foreach ($regions as $region)
                                <option value="{{$region->id}}"  {{$region->id==$region_id ? 'selected' : ''}} >{{$region->nom}}</option>
                                    @endforeach

                            </select>
                        </div>

                        <div class="col-lg-2">
                            <label>Departement</label>
                            <select class="form-control" name="departement_id" id="departement_id" >
                                <option value="">Selectionner</option>
                                @foreach ($departements as $departement)
                                    <option value="{{$departement->id}}" {{$departement->id==$departement_id ? 'selected' : ''}}>{{$departement->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label>Arrondissement</label>
                            <select class="form-control" name="arrondissement_id" id="arrondissement_id" >
                                <option value="">Selectionner</option>
                                @foreach ($arrondissements as $arrondissement)
                                    <option value="{{$arrondissement->id}}" {{$arrondissement->id==$arrondissement_id ? 'selected' : ''}}>{{$arrondissement->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label>Ticket</label>
                            <select class="form-control" name="ticket_id" id="ticket_id" >
                                <option value="">Selectionner</option>
                                @foreach ($tickets as $ticket)
                                    <option value="{{$ticket->id}}"  {{$ticket->id==$ticket_id ? 'selected' : ''}}>{{$ticket->nom}}</option>
                                @endforeach
                            </select>


                        </div>
                        <div class="col-lg-2"> <input style="margin-top: 32px;" type="submit" class="btn btn-primary" value="Chercher"></div>

                </div>
                </form>  --}}
            <br>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Prenom</th>
                            <th>Nom </th>
                            <th>Tel</th>
                            <th>Email</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($tickets as $participant)
                        <tr>
                            <td>{{ $participant->prenom }}</td>
                            <td>{{ $participant->nom }}</td>
                            <td>{{ $participant->tel }}</td>
                            <td>{{ $participant->email }}</td>




                        </tr>
                        @endforeach

                    </tbody>
                </table>



            </div>

        </div>
    </div>
</div>


@endsection

