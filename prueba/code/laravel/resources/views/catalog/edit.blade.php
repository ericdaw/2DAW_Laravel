@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Editar anime
            </div>
            <div class="card-body" style="padding:30px">
                <form action="{{ url('/catalog/edit/' . $idAnime ) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" value="{{$arrayAnime[$idAnime - 1]['title']}}" class="form-control">
                        <input type="hidden" name="_method" value="PUT">
                    </div>

                    <div class="form-group">
                        <label for="title">Any</label>
                        <input type="text" name="year" id="year" value="{{$arrayAnime[$idAnime - 1]['year']}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="title">Género</label>
                        <input type="text" name="genero" id="genero" value="{{$arrayAnime[$idAnime - 1]['genero']}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="title">Poster</label>
                        <input type="text" name="poster" id="poster" value="{{$arrayAnime[$idAnime - 1]['poster']}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="synopsis">Resumen</label>
                        <textarea name="synopsis" id="synopsis" class="form-control" rows="3">{{$arrayAnime[$idAnime - 1]['synopsis']}}</textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Editar anime
                        </button>
                    </div>

                    {{-- TODO: Cerrar formulario --}}
                </form>
            </div>
        </div>
    </div>
</div>

@stop