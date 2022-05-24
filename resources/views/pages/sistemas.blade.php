@extends('layouts.master')

@section('title', 'Sistemas')

@section('content')
<div class="row p-5">
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('dnd')}}"><img src="storage/sistemas/dnd5.jpg" alt="" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('dnd')}}" class="text-warning">Dungeons and Dragons</a>
    </div>
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('pathfinder')}}"><img src="storage/sistemas/pf.jpg" alt="" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('pathfinder')}}" class="text-warning">Pathfinder</a>
    </div>
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('snk')}}"><img src="storage/sistemas/snk.jpg" alt="" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('snk')}}" class="text-warning">Titan world</a>
    </div>
</div>
<div class="row p-5">
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('cyberpunk')}}"><img src="storage/sistemas/cyberpunk.png" alt="" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('cyberpunk')}}" class="text-warning">Cyberpunk</a>
    </div>
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('fate')}}"><img src="storage/sistemas/fate.jpg" alt="" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('fate')}}" class="text-warning">FATE</a>
    </div>
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('pokemon')}}"><img src="storage/sistemas/pokemon.jpg" alt="" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('pokemon')}}" class="text-warning">Pokemon</a>
    </div>
</div>
@stop
