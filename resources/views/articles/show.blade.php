@extends('layouts.master')
@section('title', 'Crear')
@section('content');
    <div class="row p-5">
        <a href="{{route('articles')}}"><button type="button" class="btn btn-warning" width="100%">Volver a la lista de articulos</button></a>


        @foreach ($datos as $dato)
            @if ($dato->id == $id)
                <div class="container">

                    <div class="jumbotron p-3 p-md-5 text-white-50 rounded bg-dark">
                        <div class="col-md-12 px-0">
                            <h1 class="display-6 font-italic">{{ $dato->name }}</h1>
                            <p class="lead my-3">{{$dato->release_date}}</p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <img src="{{asset('storage/'.$dato->file_path)}}" alt="Imagen articulo" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p class="text-center text-white-50">{{$dato->descripcion}}</p>
                        </div>
                    </div>
                </div>

                <main role="main" class="container">
                    <div class="row">
                        <div class="col-md-8 blog-main">

                </main><!-- /.container -->
            @endif
        @endforeach


    </div>
@stop
