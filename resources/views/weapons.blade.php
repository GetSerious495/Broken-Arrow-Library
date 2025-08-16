@extends('layout')

@section('title', 'weapons')

@section('content')
    <div class="weapon-sidebar d-flex flex-column justify-content-start">
        <div class="weapon-sidebar-content">
            <p class="text-light" style="font-size: 2rem">Weapons</p>
            <p class="text-light">Sort by</p>
            <button class="btn btn-success text-light">Search</button>
        </div>
    </div>

    <div class="d-flex justify-content-start content-area">
        @foreach ($weapons as $weapon)
            <div class="stats-box">
                <div class="stats-title text-light">
                    <p>{{ $weapon->weapons_name }}</p>
                </div>
                <div class="stats-top">
                    <div class="stats-target">
                        @if ($weapon->weapons_target_inf)
                            <img src="{{ asset('storage/icons/Target-Type-Infantry-Icon_png.png') }}" alt="Inf">
                        @endif
                        @if ($weapon->weapons_target_vehicle)
                            <img src="{{ asset('storage/icons/Target-Type-Vehicles-Icon_png.png') }}" alt="Veh">
                        @endif
                        @if ($weapon->weapons_target_heli)
                            <img src="{{ asset('storage/icons/Target-Type-Helicopters-Icon_png.png') }}" alt="Heli">
                        @endif
                    </div>

                    <div class="stats-img">
                        <img src="{{ asset('storage/' . $weapon->image) }}" alt="{{ $weapon->weapons_name }}">
                    </div>
                </div>
                <div class="stats-row">
                    <div class="text-light">
                        <p>DMG</p>
                        <p>{{ $weapon->weapons_damage }}</p>
                    </div>
                    <div class="text-light">
                        <p>Range</p>
                        <p>{{ $weapon->weapons_range }}m</p>
                    </div>
                    <div class="text-light">
                        <p>Pen</p>
                        <p>{{ $weapon->weapons_penetrate_max }}mm</p>
                    </div>
                    <div class="text-light">
                        <p>Reload</p>
                        <p>{{ $weapon->weapons_reload }} sec</p>
                    </div>
                    <div class="text-light">
                        <p>Supply</p>
                        <p>{{ $weapon->weapons_supply }} kgs</p>
                    </div>

                </div>


            </div>
        @endforeach
    </div>

@endsection
