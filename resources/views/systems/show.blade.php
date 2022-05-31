@extends('layouts.master')
@section('title', 'Crear')
@section('content');
    <div class="row p-5">

        @php
            $check = 0;
        @endphp
            @if (Auth::user()->admin)
            <div class="row p-12">
                <button><a href="{{ '../books/create' }}">Añadir nuevo libro</a></button>
            </div>
        @endif
        @foreach ($datos as $libro)
            @foreach ($datosSistema as $item)
                @if ($item->id == $libro->system_id && $check == 0)
                    <h1 class="h2 text-warning mb-3 text-center">¿No conoces {{ $item->name }}?</h1>
                    <h2 class="h3 lead text-warning mb-5">{{ $item->descripcion }}</h2>
                    <h3 class="h4 text-center text-warning">Aquí te presentamos los distintos libros:</h3>
                    @php
                        $check = 1;
                    @endphp
                @endif
            @endforeach
            <div class="container col-sm-4 text-warning text-center border border-3">
                <a href="{{ '../books/' . $libro->id }}"><img src="{{ asset('storage') . '/' . $libro->file_path }}" alt=""
                        width="300px" height="300px" class="img-fluid"></a>
                <br>
                <a href="{{ '../books/' . $libro->id }}" class="text-warning">{{ $libro->name }}</a>
                @if (Auth::check())
                    @if (Auth::user()->admin)
                        <a href="{{ '/books/' . $libro->id . '/edit/' }}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{ '../deletebook/' . $libro['id'] }}"
                            onclick="return confirm('Quieres eliminar el libro?')"><i class="fa-solid fa-eraser"></i></a>
                    @endif
                @endif
            </div>
        @endforeach


    </div>
@stop
