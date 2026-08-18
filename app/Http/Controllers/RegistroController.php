<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class RegistroController extends Controller
{
    public function index()
    {
        return view('login.registro
        ');
    }

    public function store(Request $request)
    {
        // VALIDAÇÃO DOS DADOS
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|max:255|unique:users',
            'password'  => 'required|string|max:8|confirmed',
        ]
        
        );

        if ($validator->fails()) {

            //
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } 

        // CRIAÇÃO DO USUARIO
        $user = User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password'  => hash::make($request->password),
        ]);

        Auth::login($user);

        return to_route('imc.index');
    }

    
}
