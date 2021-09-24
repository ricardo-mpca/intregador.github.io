@extends('layouts.main')

@section('title', 'API')

@section('content')


<h1>API disponíveis</h1> 

<div id="cards-container" class = "row">
        <div class = "card col-md-3">
            <div class = "card-board">
                <a href = "/quiz/v1/questions" class = "btn btn-primary">Quiz API</a>
            </div>
        </div>
        <div class = "card col-md-3">
            <div class = "card-board">
                <a href = "/pokelist" class = "btn btn-primary">Pokémon</a>
            </div>
        </div>
        <div class = "card col-md-3">
            <div class = "card-board">
                <a href = "/solos/v1/solo" class = "btn btn-primary">SmartSolos Expert</a>
            </div>
        </div>
</div>




@endsection
