@extends('layouts.master')
@section('content')
<div class="row mt-5">

    <div class="col-sm-4">
        {{-- TODO: Imagen de la película --}}
        <img src="{{$datosAnime['poster']}}" style="height:500px;" />
    </div>
    <div class="col-sm-8">
        {{-- TODO: Datos de la película --}}
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            <strong>{{$datosAnime['title']}}</strong>
        </h4>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            Año: {{$datosAnime['year']}}
        </h4>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            Genero: {{$datosAnime['genero']}}
        </h4>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            <strong>Resumen: </strong>{{$datosAnime['synopsis']}}
        </h4>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            <strong>Estado: </strong>

            @if($datosAnime['rented']==false)
            Anime Disponible
    </div>
    <div class="col-sm-4">
        <button class="bg-primary">
            Alquilar anime
            @else
            Anime actualemente alquilada
    </div>
    <div class="col-sm-4">
        <button class="bg-danger">
            Devolver anime
            @endif
            </h4>
        </button>
        <a href="{{url('/catalog/edit/'.$idAnime)}}" class="btn btn-warning">Editar anime</a>
        <button onclick="window.location='/catalog'" class="btn btn-default"><strong>
                < </strong>Volver al listado</button>
    </div>
</div>
<!-- onclick="window.location='/catalog/edit/'" -->
@stop