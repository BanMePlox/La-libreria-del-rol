@extends('layouts.master')

@section('title', 'Inicio')

@if (Auth::check())
    @if (Auth::user()->admin)
        @section('content')
            <div class="row p-5">
                <div class="container col-sm-3 text-warning text-center align-items border border-3">
                    <a href="{{ route('adminusers') }}"><i class="fa-solid fa-user p-5">Usuarios</i></a>
                </div>
                <div class="container col-sm-3 text-warning text-center border border-3">
                    <a href="{{ route('adminlibros') }}"><i class="fa-solid fa-book p-5">Libros</i></a>

                </div>
                <div class="container col-sm-3 text-warning text-center border border-3">
                    <a href="{{ route('adminsistemas') }}"><i class="fa-solid fa-book-atlas p-5">Sistemas</i></a>
                </div>
                <div class="container col-sm-3 text-warning text-center border border-3">
                    <a href="{{ route('adminnoticias') }}"><i class="fa-solid fa-newspaper p-5">Noticias</i></a>
                </div>
            @stop
        </div>
    @else
        @section('content')
            <div class="text-center text-warning m-5">
                <img src="{{ URL::asset('storage/kakashi.jpg') }}" alt="">
                <h1>Vaya, parece que la página que buscabas no existe... </h1>
            </div>
        @stop
    @endif

@endif
