@extends('layouts.master')
@section('title', 'Crear')
@section('content');
    <div class="row p-5">


        @foreach ($datos as $dato)
            @if ($dato->id == $id)
                <div class="container">

                    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                        <div class="col-md-12 px-0">
                            <h1 class="display-6 font-italic">{{ $dato->name }}</h1>
                            <p class="lead my-3">{{$dato->release_date}}</p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="#">Comprar en Amazon</a>
                                    </h3>
                                    <p class="card-text mb-auto">{{ $dato->name }} está disponible a la venta en Amazon!
                                    </p>
                                    <a href="https://www.amazon.es/s?k={{ $dato->name }}&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=V7L3VRPU4K84&sprefix=as%2Caps%2C204&ref=nb_sb_noss_2"
                                        target="_blank">Continue reading</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="text-center text-white">{{$dato->descripcion}}</p>
                        </div>
                    </div>
                </div>

                <main role="main" class="container">
                    <div class="row">
                        <div class="col-md-8 blog-main">

                </main><!-- /.container -->
                <button type="button" class="btn btn-warning"><a href="{{"../systems/$dato->system_id"}}">Volver a la lista de libros</a></button>
            @endif
        @endforeach


    </div>
@stop
