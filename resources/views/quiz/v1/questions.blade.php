@extends('layouts.main')

@section('title', 'Banco de questões')

@section('content')

<div id="cards-container" class = "row">
        @foreach( $questions as $question )
        <div class = "card col-md-3">
            <div class = "card-board">
                <p class = "card-date">{{ date('d/m/y', strtotime($question->timestamp)) }}</p>
                <h5 class = "card-title">{{ $question -> question }}</h5>
                <a href = "/quiz/v1/{{ $question->id }}" class = "btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
</div>

<a href = "/fetch" class = "btn btn-primary">Carregar mais 10 questões</a>

@endsection