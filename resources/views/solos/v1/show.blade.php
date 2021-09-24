@extends('layouts.main')

@section('title', $solo->ID_PONTO)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th> Análise de solo </th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th> ID Ponto: {{ $solo->ID_PONTO }} </th>
                    </tr>
                </thead>
            </table>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o solo:</h3>
                <p class="solo-symbol"> Símbolo do horizonte: {{ $solo->SIMB_HORIZ }}</p>
                <p class="solo-suplim"> Limite superior do horizonte: {{ $solo->LIMITE_SUP }}cm</p>
                <p class="solo-inflim"> Limite Inferior do horizonte: {{ $solo->LIMITE_INF }}cm</p>
            </div>
        </div>
    </div>

@endsection