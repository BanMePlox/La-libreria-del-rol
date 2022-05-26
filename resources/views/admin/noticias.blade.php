@extends('layouts.master')

@section('title', 'Inicio')



@if (Auth::check())
    @if (Auth::user()->admin)
        @section('content')
            @php
                $articles = DB::table('articles')->get();
            @endphp
                <div class="m-5">
                    <p class="text-warning"><a href="{{route('admin')}}"><i class="fa-solid fa-arrow-left fa-5x"></a></i></p>

                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Imágen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Modificar datos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{$article->id}}</th>
                                <td><img src="{{ asset('storage') . '/' . $article->file_path }}" alt="Imagen sistema" width="50px" height="50px"></td>
                                <td>{{$article->name}}</td>
                                <td>{{$article->descripcion}}</td>
                                <td><a href="{{ 'article/' . $article->id . '/edit/' }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ 'deletearticle/' . $article->id }}"><i class="fa-solid fa-eraser"></i></a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        @stop
    @else
        @section('content')
            <div class="text-center text-warning m-5">
                <img src="{{ URL::asset('storage/kakashi.jpg') }}" alt="">
                <h1>Vaya, parece que la página que buscabas no existe... </h1>
            </div>
        @stop
    @endif

@endif
