@extends('layouts.master')
@section('title', 'Crear')
@section('content')
@if (Auth::check())
    @if (Auth::user()->admin)

        <div class="row p-12">
            <button><a href="{{ 'articles/create' }}">Añadir nuevo articulo</a></button>
        </div>
    @endif
@endif
    <div class="row p-5">
        @foreach ($name as $articulo)
            <div class="container col-sm-4 text-warning text-center border border-3">
                <a href="{{ 'articles/' . $articulo->id }}"><img src="{{ asset('storage') . '/' . $articulo->file_path }}" alt=""
                        width="auto" height="auto" class="img-fluid"></a>
                <br>
                <a href="{{ 'articles/' . $articulo->id }}" class="text-warning">{{ $articulo->name }}</a>
                @if (Auth::check())
                    <a href="{{ 'articles/' . $articulo->id . '/edit/' }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{ 'deletearticle/' . $articulo['id'] }}" onclick="return confirm('Quieres eliminar el articulo?')"><i
                            class="fa-solid fa-eraser"></i></a>
                @endif
            </div>
        @endforeach
    </div>
@stop
