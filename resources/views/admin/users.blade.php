@extends('layouts.master')

@section('title', 'Inicio')



@if (Auth::check())
    @if (Auth::user()->admin)
        @section('content')
            @php
                $users = DB::table('users')->get();
            @endphp
            <div class="m-5">
                <p class="text-warning"><a href="{{ route('admin') }}"><i class="fa-solid fa-arrow-left fa-5x"></a></i></p>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Admin</th>
                            <th scope="col">Hacer admin</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            @php
                                $borrar = DB::table('users')->where('id', '=', $user->id)->get();
                            @endphp
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->admin }}</td>
                                <td><a href="{{ 'usertoadmin/' . $user->id }}" onclick="return confirm('Quieres hacer administrador al usuario?')"><i class="fa-solid fa-hammer"></i></a></td>
                                <td><a href="{{ 'deleteuser/' . $user->id }}" onclick="return confirm('Quieres eliminar el usuario?')"><i class="fa-solid fa-eraser"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @stop
    @else
        @section('content')
            <div class="text-center text-warning m-5">
                <img src="{{ URL::asset('storage/kakashi.jpg') }}" alt="">
                <h1>Vaya, parece que la página que buscabas no existe... </h1>
            </div>
        @stop
    @endif

@endif
