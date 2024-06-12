<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; // Correção aqui
use App\Models\User;

class UserController extends Controller
{
    public function listAllUsers(){
        // Lógica para listar todos os usuários
        return view('user.listAllUsers');
    }

    public function listUser(Request $request, $uid){
        //procurar o usuario no banco
        $user =User::where('id', $uid)->first();
        return view('user.profile', ['user' =>$user]);
    }

    public function updateUser(Request $request, $uid){
        //procurar o usuario no banco
        $user =User::where('id', $uid)->first();
        $user->name = $request->name;
        $user-> email = $request-> email;
        if ($request->password != ''){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('listUser',[$user->id])
        ->with('message','Atualizado com sucesso!');
    }

    public function deleteUser(Request $request, $uid){
    
        User::where('id', $uid)->delete();
        return redirect()->route('listAllUsers')
        ->with('message','Atualizado com sucesso!');
    }



    public function registerUser(Request $request){
        if($request->method() === 'GET'){
            return view('user.register');
        }else{
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Correção aqui
            ]);

            Auth::login($user);
            return redirect()->route('listAllUsers'); 
        }
    }

    public function perfilUser(){
        return view('users.perfilUser');
    }

    public function editUser(){
        return view('users.IDEdit');
    }

  
}
