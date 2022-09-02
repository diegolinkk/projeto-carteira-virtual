<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $data = $request->except(["_token"]);
        $data['password'] = Hash::make($data['password']);
        $user =  User::create($data);
        Auth::login($user);
        return redirect()->route("index");
    }
}
