<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public $articles = [
        0=>['titolo' =>'Articolo di Sport', 'descrizione'=>'descrizione di prova','nome'=>'Luca','category'=>'Sport'],
        1=>['titolo' =>'Articolo sui Film', 'descrizione'=>'descrizione di prova','nome'=>'Marco','category'=>'Film'],
        2=>['titolo' =>'Articolo di Elettronica', 'descrizione'=>'descrizione di prova','nome'=>'Luigi','category'=>'Elettronica'],
        3=>['titolo' =>'Articolo di Cucina', 'descrizione'=>'descrizione di prova','nome'=>'Giovanni','category'=>'Cucina']
    ];

 
}
