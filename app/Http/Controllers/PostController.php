<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //CREAMOS LA FUNCION INDEX PARA MOSTRAR RUTA
    public function index()
    {
        return view('dashboard');
    }
}
