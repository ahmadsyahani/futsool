@extends('layouts.app')

@section('content')
<style>
    @font-face {
      font-family: 'Lexend';
      src: url('fonts/Lexend-Medium.ttf');
    }

    body {
      font-family: 'Lexend', sans-serif; 
    }

    .back-image {
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        filter: blur(2px);  
    }
</style>

<div class="container">
    <div class="text-center mb-4">
        <h1>Lapangan</h1>
    </div>
    <div class="card mb-5">
        <div class="card-header text-center"><h4>Lapangan Indoor</h4></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/futsal.jpeg') }}" style="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Indoor Reguler</h5>
                            <p class="card-text">Rp 300.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/futsal.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Indoor Matras</h5>
                            <p class="card-text">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/futsal.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Indoor Rumput</h5>
                            <p class="card-text">Rp 200.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Outdoor-->

    <div class="card">
        <div class="card-header text-center"><h4>Lapangan Outdoor</h4></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/futsal.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Outdoor Reguler</h5>
                            <p class="card-text">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/futsal.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Outdoor Matras</h5>
                            <p class="card-text">Rp 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/futsal.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Outdoor Rumput</h5>
                            <p class="card-text">Rp 150.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
