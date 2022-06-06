@extends('layouts.master')
@section('title', 'Crear')
@section('content')
@if (Auth::check())

    @if (Auth::user()->admin)

        <a href="{{ '../deletepost/' .$id }}" onclick="return confirm('Quieres eliminar el post?')" class="ml-10">Eliminar post</a>
    @endif
    @endif
        @php
            $respuestas = DB::table('answers')
                ->where('post_id', '=', $id)
                ->get();
            $post = DB::table('posts')->where('id', '=', $id)->get();

        @endphp
        @foreach ($post as $a)

            <div class="container col-sm-12 text-warning">
                <h1 class="text-decoration-underline  text-center">{{$a->name}}</h1>
                <p class="text-left">{{$a->cuerpo}}</p>
            </div>

        @endforeach

        @foreach ($respuestas as $item)
        <div class="container col-sm-12 text-warning text-center border border-3 m-4">
            <div class="col-sm-2 border">
                @php
                    $usuario = DB::table('users')->where('id', '=', $item->user_id)->select('name as Usuario')->get();

                    $usuario = Str::of($usuario)->between(':', '}')

                @endphp
                Usuario: {{$usuario}}
            </div>
            <div class="col-sm-8">
                {{$item->body}}
            </div>
        </div>
        @endforeach
        @if (Auth::check())
        <div class="col-sm-12 border text-warning text-center">
            <form action="{{route('asnwercreate', $id)}}" method="get" enctype="multipart/form-data">
                @csrf
                <div class="form-group text-warning p-4">
                    <label for="name">Añadir respuesta</label>
                    <input type="text" name="body" id="inputname">
                    <input type="hidden" name="post_id" value="{{$id}}" id="inputname">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <br>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
        @endif
        @stop

