@extends('layouts.master')

@section('title', 'Inicio')



@if (Auth::check())
    @if (Auth::user()->admin)
        @section('content')
            @php
                $books = DB::table('books')->get();
            @endphp
                <div class="m-5">
                    <p class="text-warning"><a href="{{route('admin')}}"><i class="fa-solid fa-arrow-left fa-5x"></a></i></p>

                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Imágen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Modificar datos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <th scope="row">{{$book->id}}</th>
                                <td><img src="{{ asset('storage') . '/' . $book->file_path }}" alt="Imagen sistema" width="50px" height="50px"></td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->release_date}}</td>
                                <td>{{$book->price}}</td>
                                <td>{{$book->descripcion}}</td>
                                <td><a href="{{ 'books/' . $book->id . '/edit/' }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ 'deletebook/' . $book->id }}"><i class="fa-solid fa-eraser"></i></a></td>
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
