@extends('layouts.master')
@section('title', 'Crear')
@if (Auth::check())
    @if (Auth::user()->admin)
        @section('content')
            <form action="{{ url('/subs') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group text-warning p-4">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="inputname">
                </div>
                <div class="form-group text-warning p-4">
                    <label for="system_id">Sistema</label>
                    <select name="system_id" id="selectsystems">
                        @foreach ($sistemas as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        @stop
    @else
        @section('content')
            <p class="text-warning m-5">Lo sentimos, el acceso ha sido denegado!</p>
        @stop
    @endif
@endif

