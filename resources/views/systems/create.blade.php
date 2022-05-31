@extends('layouts.master')
@section('title', 'Crear')
@if (Auth::check())
    @if (Auth::user()->admin)
        @section('content')
            <form action="{{ url('/systems') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group text-warning p-4">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="inputname">
                    <br>
                    <label for="date">Fecha de lanzamiento</label>
                    <input type="date" name="release_date" id="inputreleasedate">
                    <br>
                    <label for="file_path">Portada</label>
                    <input type="file" name="file_path" id="inputimage">
                    <br>
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="inputimage">
                    <br>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        @stop
    @else
        @section('content')
            <a style="text-decoration:none" href="{{ route('main') }}">
                <img src="{{ asset('storage/accesodenegado.png') }}" alt="Goblin asustado" class="rounded mx-auto d-block"
                    height="400px">
                <h1 class="text-warning text-center m-5">Vaya, aventurero, parece que estás un poco perdido! Quizá quieres
                    volver al inicio?</h1>
            </a>
        @stop
    @endif
@endif
