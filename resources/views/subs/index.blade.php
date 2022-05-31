@extends('layouts.master')
@section('title', 'Crear')
@section('content')
    @if (Auth::check())
        @if (Auth::user()->admin)
            <div class="row p-12">
                <button><a href="{{ 'subs/create' }}">Añadir nuevo subforo</a></button>
            </div>
        @endif
    @endif
    <div class="row p-5">
        @foreach ($subs as $subforo)
            <div class="container col-sm-4 text-warning text-center border border-3">
                <a href="{{ 'subs/' . $subforo->id }}" class="text-warning">{{ $subforo->name }}</a>
                @if (Auth::check())
                    {{-- <a href="{{ 'subs/' . $subforo->id . '/edit/' }}"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                    <a href="{{ 'deletesub/' . $subforo['id'] }}" onclick="return confirm('Quieres eliminar el subforo?')"><i
                            class="fa-solid fa-eraser"></i></a>
                @endif
            </div>
        @endforeach
    </div>
@stop
