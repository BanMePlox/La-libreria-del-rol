@extends('layouts.master')
@section('title', 'Dragones y Mazmorras')
@section('content')
<div class="row p-5">
    <div class="col-sm-4 text-warning text-center border border-3">
        <a href="{{route('fate')}}"><img src="storage/sistemas/dnd/phb.png" alt="Imagen PHB" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('fate')}}" class="text-warning">Player's Handbook</a>
    </div>
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('fate')}}"><img src="storage/sistemas/dnd/DMG.png" alt="Imagen DMG" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('fate')}}" class="text-warning">Dungeon master's guide</a>
    </div>
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('pokemon')}}"><img src="storage/sistemas/dnd/MM.png" alt="Imagen MM" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('pokemon')}}" class="text-warning">Monster Manual</a>
    </div>
</div>
<div class="row p-5">
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('cyberpunk')}}"><img src="storage/sistemas/dnd/VGM.png" alt="Imagen VGM" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('cyberpunk')}}" class="text-warning">Volo's guide to monsters</a>
    </div>
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('fate')}}"><img src="storage/sistemas/dnd/XGE.png" alt="Imagen XGE" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('fate')}}" class="text-warning">Xanathar's Guide to Everything</a>
    </div>
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('pokemon')}}"><img src="storage/sistemas/dnd/MTF.png" alt="Imagen MTF" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('pokemon')}}" class="text-warning">Mondenkainen's tome of foes</a>
    </div>
</div>
<div class="row p-5">
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('cyberpunk')}}"><img src="storage/sistemas/dnd/TCE.png" alt="Imagen TCE" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('cyberpunk')}}" class="text-warning">Tasha's cauldron of Everything</a>
    </div>
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('fate')}}"><img src="storage/sistemas/dnd/FTD.png" alt="Imagen FTD" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('fate')}}" class="text-warning">Fizban's Treasury of Dragons</a>
    </div>
    <div class="container col-sm-4 text-warning text-center border border-3">
        <a href="{{route('pokemon')}}"><img src="storage/sistemas/dnd/EGW.png" alt="Imagen EGW" width="auto" height="auto" class="img-fluid"></a>
        <br>
        <a href="{{route('pokemon')}}" class="text-warning">Explorer's guide to Wildemount</a>
    </div>
</div>
@stop
