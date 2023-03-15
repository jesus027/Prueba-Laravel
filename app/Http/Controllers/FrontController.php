<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class FrontController extends Controller
{
    public function api() {

        $respuesta = Http::get('https://rickandmortyapi.com/api/character/1');
        $api = $respuesta->json();

        return view('auth.front', compact('api'));

    }
}
