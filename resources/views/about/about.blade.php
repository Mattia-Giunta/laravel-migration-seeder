@extends('layouts.layout')

@section('title', 'benvenuti | treni in partenza')

@section('content')

<div class="container mt-5">

    <h1>Tutti i treni</h1>
    <div class="row row-cols-5 gap-4">

        @foreach($train as $element)

        <div class="col card" style="width: 18rem;">

            <img src="{{ Vite::asset('resources/img/treno.jpg')}}" class="card-img-top" alt="...">

            <div class="card-body">

                <h5 class="card-title">Conpagnia: {{$element['company']}}</h5>

                <p class="card-text">Stazione di partenza: {{$element['departure_station']}}</p>

                <p class="card-text">Stazione di arrivo: {{$element['arrival_station']}}</p>

                <p class="card-text">Orario di partenza: {{$element['departure_time']}}</p>

                <p class="card-text">Orario di arrivo: {{$element['arrival_time']}}</p>

                <p class="card-text">Numero di vagoni: {{$element['carriages_count']}}</p>

                @if($element['on_time'])

                <p class="text-success">In tempo</p>

                @else

                <p class="text-danger">In ritardo</p>

                @endif

                @if($element['canceled'])
                <p class="text-danger">CANCELLATO</p>
                @endif

            </div>

        </div>

        @endforeach

    </div>

</div>


@endsection
