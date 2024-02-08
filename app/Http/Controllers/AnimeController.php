<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{

    public function home()
    {
        return view('homepage');
    }

    public function genres()
    {
        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        $generi = $response['data'];
        return view('generi', ['dati' => $generi]);
    }

    public function byGenre($genre_id)
    {
        $uri = 'https://api.jikan.moe/v4/anime?genres=' . $genre_id;
        $anime = Http::get($uri)->json()['data'];
        return view('genere', compact('anime'));
    }

    public function anime($id)
    {
        $uri = 'https://api.jikan.moe/v4/anime/' . $id;
        $anime = Http::get($uri)->json()['data'];
        return view('anime', compact('anime'));
    }

    public function magazine (){
        $response = Http::get('https://api.jikan.moe/v4/magazines')->json();
        $magazines = $response['data'];
        return view('magazines',['dati'=>$magazines]);
    }


}
