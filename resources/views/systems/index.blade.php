@extends('layouts.master')
@section('title', 'Crear')
@section('content')
    @if (Auth::user()->admin)
    <div class="row p-12">
        <button><a href="{{"systems/create"}}">Añadir nuevo sistema</a></button>
    </div>

    @endif
    <div class="row p-5">
        {{$systems}}
    </div>
@stop
