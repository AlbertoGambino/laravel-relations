@extends('layouts.main-layout')

@section('content')

<div class="container">

    <h1>Pilot details:</h1>

    <h2>{{ $pilot -> firstname}} {{ $pilot -> lastname}} </h2>

    <ul>

        @foreach ($pilot -> cars as $car)

            <li>

                {{$car -> name}} - {{ $car -> model}} <br>

                {{$car -> kW}} KW

                <br>

                {{$car -> brand -> name}}

                <br>

                {{$car -> brand -> nationality}}



            </li>

        @endforeach
    </ul>

</div>

@endsection
