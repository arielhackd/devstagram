<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //CREAMOS LA FUNCION INDEX PARA MOSTRAR RUTA
    public function index(User $user)
    {
        return view('dashboard',[
            'user'=>$user
        ]);
    }
}
