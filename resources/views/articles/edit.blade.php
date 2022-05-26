@extends('layouts.master')
@section('title', 'Crear')
@if (Auth::check())
@if (Auth::user()->admin)
    @section('content')
        <form action="{{url('articles/'.$article->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH')}}
            <div class="form-group text-warning p-4">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="inputname" value="{{$article['name']}}">
                <br>
                <label for="file_path">Imagen</label>
                <input type="file" name="file_path" id="inputimage">
                <br>
                <label for="descripcion">Cuerpo</label>
                <input type="text" name="descripcion" id="inputimage" value={{$article['descripcion']}}>
                <br>

            </div>
            <button type="submit" class="btn btn-primary">Modificar datos</button>
        </form>
    @stop
@else

@section('content')
<img src="{{asset('storage/accesodenegado.png')}}" alt="Goblin asustado">
<p class="text-warning m-5">Lo sentimos, el acceso ha sido denegado!</p>
@stop
@endif
@endif
