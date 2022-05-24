@extends('layouts.master')
@section('title', 'Crear')
@if (Auth::user()->admin)
    @section('content')
        <form action="{{ url('/books') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-warning p-4">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="inputname">
            </div>
            <div class="form-group text-warning p-4">
                <label for="date">Fecha de lanzamiento</label>
                <input type="date" name="release_date" id="inputreleasedate">
            </div>
            <div class="form-group text-warning p-4">
                <label for="price">Precio</label>
                <input type="number" name="price" id="inputpricebook">
            </div>
            <div class="form-group text-warning p-4">
                <label for="system_id">Sistema</label>
                <select name="system_id" id="selectsystems">
                    @foreach ($sistemas as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group text-warning p-4">
                <label for="file_path">Portada</label>
                <input type="file" name="file_path" id="inputimage">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @stop
@else
    @section('content')
        <p class="text-warning m-5">Lo sentimos, el acceso ha sido denegado!</p>
    @stop
@endif
