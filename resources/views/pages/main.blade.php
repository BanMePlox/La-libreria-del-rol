@extends('layouts.master')

@section('title', 'Inicio')


@section('content')

    <div id="demo" class="carousel slide carousel-dark" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner carousel-fade">
            <div class="carousel-item">
                <img src="storage/PF1.png" alt="Imagen de carrusel" class="d-block w-100 h-20">
                <div class="carousel-caption text-warning">
                    <h2>Cumple tus fantasias y disfruta!</h2>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="storage/japan.jpg" alt="Imagen de carrusel" class="d-block w-100">
                <div class="carousel-caption text-info bg-dark">
                    <h2>La libreria del rol</h2>
                    <p>Vive increíbles aventuras con tus amigos!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="storage/SW1.jpg" alt="Imagen de carrusel" class="d-block w-100">
                <div class="carousel-caption bg-transparent text-dark">
                    <h2>Diviertete, convierte en quien soñaste de pequeño!</h3>
                </div>
            </div>
        </div>



        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container py-5 my-2">
        <h1 class="text-warning text-center text-decoration-underline">Novedades en los TTRPG</h1>
    </div>
    <div class="container-fluid">
        @php
            $articles = DB::table('articles')
                ->limit(3)
                ->get();
        @endphp
<div class="row p-5">
    @foreach ($articles as $articulo)
        <div class="container col-sm-4 text-warning text-center border border-3">
            <a href="{{ 'articles/' . $articulo->id }}"><img src="{{ asset('storage') . '/' . $articulo->file_path }}" alt=""
                    width="200px" height="200px" class="mt-3"></a>
            <br>
            <h3>{{$articulo->name}}</h3>
            <a href="{{ 'articles/' . $articulo->id }}">
                <h4>Leer más...</h4>
            </a>

        </div>
    @endforeach
</div>
@stop
