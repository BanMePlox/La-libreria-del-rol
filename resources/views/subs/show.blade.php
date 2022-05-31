@extends('layouts.master')
@section('title', 'Crear')

    @section('content')


        <h1 class="text-warning text-center">Lista de posts</h1>
        @foreach ($datos as $post)
            <div class="container col-sm-12 text-warning text-center border border-3 mb-4">
                <a href="{{ '../posts/' . $post->id }}" class="text-warning">{{ $post->name }}</a>

            </div>

        @endforeach
        <div class="col-sm-12 border text-warning text-center">
            <form action="{{route('postcreate', $id)}}" method="get" enctype="multipart/form-data">
                @csrf
                <div class="form-group text-warning p-4">
                    <h1>Crear post</h1>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="inputname">
                    <br>
                    <label for="name">Cuerpo</label>
                    <textarea type="text" name="cuerpo" id="inputname" class="form-control-lg"></textarea>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="subs_id" value="{{$id}}" id="inputname">
                    <br>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
    @stop
