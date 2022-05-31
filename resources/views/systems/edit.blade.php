@extends('layouts.master')
@section('title', 'Crear')
@if (Auth::check())
@if (Auth::user()->admin)
    @section('content')
        <form action="{{url('systems/'.$sistema->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH')}}
            <div class="form-group text-warning p-4">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="inputname" value="{{$sistema['name']}}">
                <br>
                <label for="date">Fecha de lanzamiento</label>
                <input type="date" name="release_date" id="inputreleasedate" value="{{$sistema['release_date']}}">
                <br>
                <label for="file_path">Portada</label>
                <input type="file" name="file_path" id="inputimage" >
                <br>
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="inputimage" value="{{$sistema['descripcion']}}">
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
