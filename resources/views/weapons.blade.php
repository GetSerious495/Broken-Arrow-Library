@extends('layout')

@section('title', 'weapons')

@section('content')
    @foreach ($weapons as $weapon)
        <div class="stats-box container d-flex justify-content-evenly">
            <div class="stats-content container d-flex align-self-end justify-content-evenly text-light">
                <p>{{$weapon->weapons_name}}</p>
            </div>
            <div class="stats-content container d-flex align-self-end justify-content-evenly text-light">
                <p>{{$weapon->weapons_damage}}</p>
            </div>
            <div class="stats-content container d-flex align-self-end justify-content-evenly text-light">
                <p>{{$weapon->weapons_range}}</p>
            </div>
            <div class="stats-content container d-flex align-self-end justify-content-evenly text-light">
                <p>{{$weapon->weapons_penetrate}}</p>
            </div>
            <div class="stats-content container d-flex align-self-end justify-content-evenly text-light">
                <p>{{$weapon->weapons_reload}}</p>
            </div>
            <div class="stats-content container d-flex align-self-end justify-content-evenly text-light">
                <p>{{$weapon->weapons_supply}}</p>
            </div>
        </div>
    @endforeach
@endsection
