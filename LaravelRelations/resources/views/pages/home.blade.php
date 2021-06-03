@extends('layouts.main-layout')

@section('content')

    <div class="container">

        <h1>Cars:</h1>

        <ul>

            @foreach ($cars as $car)

                <li>

                    {{$car -> name}} {{$car -> model}} ({{$car -> kW}}KW) <br>

                    Brand: {{$car -> brand -> name}} - nationality: {{$car -> brand -> nationality}} <br>

                    Pilots:

                    <ul>

                        @foreach ($car -> pilots as $pilot)

                            <li>
                                <a href="{{ route('pilot' , $pilot -> id)}}">

                                    {{ $pilot -> firstname}} {{ $pilot -> lastname}}

                                </a>


                                <br>
                                ({{$pilot -> date_of_birth}} - {{$pilot -> nationality}})


                            </li>

                        @endforeach

                    </ul>


                </li>

            @endforeach

        </ul>

    </div>

@endsection
