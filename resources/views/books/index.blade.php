@extends('layouts.master')
@section('title', 'Crear')
@section('content')
    @if (Auth::user()->admin)
    <div class="row p-12">
        <button><a href="{{"books/create"}}">Añadir nuevo libro</a></button>
    </div>
    @endif
    <div class="row p-5">
        @foreach ($books as $libro)
            <div class="container col-sm-4 text-warning text-center border border-3">
                <a href="{{ route('dnd') }}"><img src="{{asset('storage').'/'.$libro->file_path}}" alt="" width="auto" height="auto"
                        class="img-fluid"></a>
                <br>
                <a href="{{ route('dnd') }}" class="text-warning">{{ $libro->name }}</a>
                {{-- @if (Auth::check()) --}}
                @if (1 == 1)
                    <a href="{{"books/".$libro->id."/edit/"}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{"deletebook/".$libro['id']}}" onclick="return confirm('Quieres eliminar el libro?')"><i class="fa-solid fa-eraser"></i></a>
                @endif
            </div>
        @endforeach
    </div>
@stop
