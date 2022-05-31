@extends('layouts.master')
@section('title', 'Crear')
@if (Auth::check())
    @if (Auth::user()->admin)
        @section('content')

            <form action="{{ url('/books/' . $libro->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-group text-warning p-4">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="inputname" value="{{ $libro['name'] }}">
                    <br>
                    <label for="date">Fecha de lanzamiento</label>
                    <input type="date" name="release_date" id="inputreleasedate" value="{{ $libro['release_date'] }}">
                    <br>
                    <label for="price">Precio</label>
                    <input type="number" name="price" id="inputpricebook" value="{{ $libro['price'] }}">
                    <br>
                    <label for="system_id">Sistema</label>
                    <select name="system_id" id="selectsystems">
                        @foreach ($sistemas as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <img src="{{ asset('storage') . '/' . $libro->file_path }}" alt="Portada libro actual" width="100px"
                        onmouseover="this.style.width='300px'" onmouseout="this.style.width='100px'">
                    <label for="file_path">Portada</label>
                    <br>
                    <input type="file" name="file_path" id="inputimage" value="{{ $libro['file_path'] }}">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="inputdesc" value="{{ $libro['descripcion'] }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @stop
    @else
        @section('content')
            <p class="text-warning m-5">Lo sentimos, el acceso ha sido denegado!</p>
        @stop
    @endif
@endif
