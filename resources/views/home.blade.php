@extends('layouts.layout')

@section('title', 'benvenuti | Home')

@section('content')

    <div class="container mt-5">

        <h1>Treni in partenza oggi</h1>
        <div class="row row-cols-5 gap-4">

            @foreach($trains as $train)

            <div class="col card" style="width: 18rem;">

                <img src="{{ Vite::asset('resources/img/treno.jpg')}}" class="card-img-top" alt="...">

                <div class="card-body">

                    <h5 class="card-title">Conpagnia: {{$train['company']}}</h5>

                    <p class="card-text">Stazione di partenza: {{$train['departure_station']}}</p>

                    <p class="card-text">Stazione di arrivo: {{$train['arrival_station']}}</p>

                    <p class="card-text">Orario di partenza: {{$train['departure_time']}}</p>

                    <p class="card-text">Orario di arrivo: {{$train['arrival_time']}}</p>

                    <p class="card-text">Numero di vagoni: {{$train['carriages_count']}}</p>

                    @if($train['on_time'])

                    <p class="text-success">In tempo</p>

                    @else

                    <p class="text-danger">In ritardo</p>

                    @endif

                    @if($train['canceled'])
                    <p class="text-danger">CANCELLATO</p>
                    @endif

                </div>

            </div>

            @endforeach

        </div>

    </div>


@endsection
