@extends('plantilla')
@section('contenido')
<div class="row justify-content-center mt-5">
    <div class="col-10 text-center">
        <h1>Descubre nuestro universo</h1>

        <div class="row mt-4">
            <div class="col-md-3">
                <a href="/minecraft">
                    <img src="{{ asset('images/minecraft_logo.png') }}" alt="minecraft" class="img-fluid rounded shadow-sm">
                </a>
                <p>Minecraft</p>
            </div>

            
            <div class="col-md-3">
                <a href="/dungeons">
                    <img src="{{ asset('images/dungeons_logo.png') }}" alt="dungeons" class="img-fluid rounded shadow-sm">
                </a>
                <p>Dungeons</p>
            </div>
            
            <div class="col-md-3">
                <a href="/legends">
                    <img src="{{ asset('images/legends_logo.png') }}" alt="legends" class="img-fluid rounded shadow-sm">
                </a>
                <p>Legends</p>
            </div>

            <div class="col-md-3">
                <a href="/movie">
                    <img src="{{ asset('images/minecraft_movie.png') }}" alt="movie" class="img-fluid rounded shadow-sm">
                </a>
                <p>Movie</p>
            </div>
        </div>
    </div>
</div>
@endsection
