@extends('layouts.master')
@section('title', 'Crear')
@section('content');
<div class="row p-5">


@foreach ($datos as $libro)
<div class="container col-sm-4 text-warning text-center border border-3">
    <a href="{{"../books/".$libro->id}}"><img src="{{asset('storage').'/'.$libro->file_path}}" alt="" width="auto" height="auto"
            class="img-fluid"></a>
    <br>
    <a href="{{"../books/".$libro->id}}" class="text-warning">{{ $libro->name }}</a>
    {{-- @if (Auth::check()) --}}
    @if (1 == 1)
        <a href="{{"/books/".$libro->id."/edit/"}}"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="{{"../books/delete/".$libro['id']}}" onclick="return confirm('Quieres eliminar el libro?')"><i class="fa-solid fa-eraser"></i></a>
    @endif
</div>
@endforeach


</div>
@stop

