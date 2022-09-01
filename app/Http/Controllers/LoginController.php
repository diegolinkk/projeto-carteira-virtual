<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->route('index');
        }else{
            return redirect()->back()->withErrors("Usuário e/ou senha errados");
        }

    }

    public function create()
    {
        return  view('login.create');
    }

    public function store(Request $request)
    {
        return "Função que cria o usuário";
    }
}
