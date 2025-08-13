@extends('layout')

@section('title', 'BA Library')

@section('content')
    <div class="container d-flex text-light justify-content-center">
        <h1>Broken Arrow Library</h1>
    </div>
    <div class="container d-flex justify-content-evenly" style="width:40rem">
        <a href="{{ route('weapons') }}">
            <div class="option-box">
                <p class="text-light">Weapons</p>
            </div>
        </a>
        <div class="option-box">
            <p class="text-light">Units</p>
        </div>
        <div class="option-box">
            <p class="text-light">Specifications</p>
        </div>
    </div>
    <div class="container d-flex justify-content-evenly" style="width:40rem">
        <div class="option-box">
            <p class="text-light">Deck creator</p>
        </div>
        <div class="option-box">
            <p class="text-light">Comparision</p>
        </div>
        <div class="option-box">
            <p class="text-light">Credits</p>
        </div>
    </div>

@endsection
