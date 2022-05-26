@extends('layouts.master')

@section('title', 'Inicio')


@section('content')
<div class="text-center text-warning m-5">
    <img src="{{ URL::asset('storage/kakashi.jpg') }}" alt="">
    <h1>Vaya, parece que la página que buscabas no existe... </h1>
</div>
@stop
