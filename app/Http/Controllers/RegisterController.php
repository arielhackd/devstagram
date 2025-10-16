<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function crear()
    {
    return view('auth.register');
    }

    public function store(Request $request)
    {
        //Se reescribe el usuario para despues validarlo ya con el slug aplicado
        $request->request->add(['username'=> Str::slug($request->username)]);
        
        //Validación
        $this->validate($request,[
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //AUTENTICA UN USUARIO
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        //OTRA FORMA DE AUTENTICAR UN USUARIO ES ESTA
        //auth()->attempt($request->only('email','password'));

        //redireccionamos luego de insertar el usuario en la bd
        return redirect()->route('posts.index');    
    }
}