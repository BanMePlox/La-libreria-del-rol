@extends('layouts.master')
@section('title', 'Crear')
@section('content')
    @if (Auth::check())
        @if (Auth::user()->admin)
            <div class="row p-12">
                <button><a href="{{ 'systems/create' }}">Añadir nuevo sistema</a></button>
            </div>
        @endif
    @endif
    <div class="row p-5">
        @foreach ($systems as $sistema)
            <div class="container col-sm-4 text-warning text-center border border-3">
                <a href="{{ 'systems/' . $sistema->id }}"><img src="{{ asset('storage') . '/' . $sistema->file_path }}"
                        alt="Portada sistema" width="auto" height="auto" class="img-fluid"></a>
                <br>
                <a href="{{ 'systems/' . $sistema->id }}" class="text-warning">{{ $sistema->name }}</a>
                @if (Auth::check())
                    <a href="{{ 'systems/' . $sistema->id . '/edit/' }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{ 'delete/' . $sistema['id'] }}" onclick="return confirm('Quieres eliminar el sistema?')"><i
                            class="fa-solid fa-eraser"></i></a>
                @endif
            </div>
        @endforeach
    </div>
@stop
