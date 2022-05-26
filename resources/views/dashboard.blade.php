@extends('layouts.master')

@section('title', 'Inicio')


@section('content')
    <script>
        setTimeout(function() {
            window.location.href = '{{route('main')}}';
        }, 5000);
    </script>
    <div class="text-center text-warning m-5">
        <img src="{{ URL::asset('storage/naruto2.jpg') }}" alt="">
        <h1>Bienvenido, aventurero! En unos segundos, serás redireccionado al inicio.</h1>
    </div>
@stop
