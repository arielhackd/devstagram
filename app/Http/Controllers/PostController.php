<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //CREAMOS LA FUNCION INDEX PARA MOSTRAR RUTA
    public function index()
    {
        dd(auth()->user());
    }
}
