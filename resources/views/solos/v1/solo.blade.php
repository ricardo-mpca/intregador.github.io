@extends('layouts.main')

@section('title', 'Análises de Solos')

@section('content')

<h1>SmartSolos Expert</h1>

<a href = "/health" class = "btn btn-primary">TESTE DE FUNCIONAMENTO</a>
<a href = "/solos/v1/create" class = "btn btn-primary">CLASSIFICAR SOLO</a>

<div id="cards-container" class = "row">
        @foreach( $solos as $solo )
        <div class = "card col-md-3">
            <div class = "card-board">
                <p class = "card-date">{{ date('d/m/y', strtotime($solo->timestamp)) }}</p>
                <h5 class = "card-title">{{ $solo -> ID_PONTO }}</h5>
                <a href = "/solos/v1/{{ $solo->id }}" class = "btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
</div>

@endsection