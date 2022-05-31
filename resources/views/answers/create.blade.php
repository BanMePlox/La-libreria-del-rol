@extends('layouts.master')
@section('title', 'Crear')
@php
    $id = $_GET['1'];
@endphp
@if (Auth::check())
    @section('content')
    {{$id}}
        <form action="{{route('postcreate')}}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-warning p-4">
                <label for="name">Respuesta</label>
                <input type="text" name="body" id="inputname">
                <input type="hidden" name="post_id" value="{{$id}}" id="postid">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <br>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    @stop
@else
    <div class="form-group text-warning p-4">
        Lo sentimos, debes estar conectado para responder!
    </div>
@endif
