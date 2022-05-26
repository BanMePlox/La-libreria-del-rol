@extends('layouts.master')

@section('title', 'Inicio')



@if (Auth::check())
    @if (Auth::user()->admin)
        @section('content')
            @php
                $systems = DB::table('systems')->get();
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
                                <th scope="col">Descripcion</th>
                                <th scope="col">Modificar datos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($systems as $system)
                            <tr>
                                <th scope="row">{{$system->id}}</th>
                                <td><img src="{{ asset('storage') . '/' . $system->file_path }}" alt="Imagen sistema" width="50px" height="50px"></td>
                                <td>{{$system->name}}</td>
                                <td>{{$system->release_date}}</td>
                                <td>{{$system->descripcion}}</td>
                                <td><a href="{{ 'systems/' . $system->id . '/edit/' }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ 'deletesystems/' . $system->id }}"><i class="fa-solid fa-eraser"></i></a></td>

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
