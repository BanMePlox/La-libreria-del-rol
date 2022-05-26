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
                    <p>Cumple tus fantasias y disfruta!</p>
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
                    <h3>Diviertete, convierte en quien soñaste de pequeño!</h3>
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
        <h1 class="text-warning text-center">Novedades en los TTRPG</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md bg-transparent text-white">
                <img src="storage/portada/paladine.jpg" alt="Imagen titan fundador"
                    class="img-thumbnail img-fluid ratio ratio-16x9">
                <h3 class="text-center">Titan World: EL TTRPG de Attack on Titans, confirmado.</h3>
                <div class="text-center">
                    <a href="#">Leer más...</a>
                </div>
            </div>
            <div class="col-md bg-transparent text-white">
                <img src="storage/portada/spelljammer.jpg" alt="Imagen Spelljammer"
                    class="img-thumbnail img-fluid ratio ratio-16x9">
                <h3 class="text-center">Spelljammer: Aventuras en el espacio se ha confirmado oficialmente</h3>
                <div class="text-center">
                    <a href="#">Leer más...</a>
                </div>
            </div>
            {{-- https://www.belloflostsouls.net/2022/05/warhammer-40k-new-chaos-combat-patrol-box-announced.html --}}
            <div class="col-md bg-transparent text-white">
                <img src="storage/portada/a.jpg" alt="Imagen Warhammer" class="img-fluid img-thumbnail  ratio ratio-16x9">
                <h3 class="text-center">Warhammer 40K: Se anuncia la nueva caja de Patrulla de Combate del Caos </h3>
                <div class="text-center">
                    <a href="#" class="text-center">Leer más...</a>
                </div>
            </div>
        </div>
    </div>
@stop
