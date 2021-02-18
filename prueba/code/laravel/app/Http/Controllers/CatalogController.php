<?php

namespace App\Http\Controllers;

use App\Models\Animes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\postCreate;

class CatalogController extends Controller
{

    public function getIndex()
    {
        $anime = Animes::all();
        return view('catalog.index', ['arrayAnime' => $anime]);
    }

    public function getShow($id)
    {
        $arrayAnime = Animes::findOrFail($id);
        return view('catalog.show', ['datosAnime' => $arrayAnime, 'idAnime' => $id]);
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function postCreate(Request $data)
    {
        $new_anime = new Animes();
        $new_anime->title = $data['title'];
        $new_anime->year = $data['year'];
        $new_anime->genero = $data['genero'];
        $new_anime->poster = $data['poster'];
        $new_anime->synopsis = $data['synopsis'];
        $new_anime->save();
        $anime = Animes::all();
        return view('catalog.index', ['arrayAnime' => $anime]);
    }

    public function getEdit($id)
    {
        $anime = Animes::all();
        return view('catalog.edit', ['idAnime' => $id, 'arrayAnime' => $anime]);
    }

    public function putEdit(Request $data, $id)
    {
        $arrayAnime = Animes::findOrFail($id);
        $arrayAnime->update($data->all());
        return view('catalog.show', ['datosAnime' => $arrayAnime, 'idAnime' => $id]);
    }
}
