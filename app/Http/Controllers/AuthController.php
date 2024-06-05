<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    Public function loginUser(Request $request){
        if($request->method()=== 'GET'){
            return view('auth.login');
        }else{
            $credentials = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string'
            ]);
            if(Auth::attempt($credentials)){
                        return redirect()
                        ->intended('/users')
                        ->with('success','Login realizado com sucesso.');

            }
            return back()->withErros([
                'email' =>'Credenciais invalidas.',

            ])->withInput();
        }
    }

    Public function logoutUser(Request $request){
        Auth::logout();
        return redirect()
                        ->route('login')
                        ->with('success','Logout realizado com sucesso.');

    }
}
