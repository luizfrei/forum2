<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listAllUsers(){
        //logica
    return view('users.listAllUsers');
    }

    Public function createUser(){
        return view('users.createUser');
    }

    
    Public function perfilUser(){
        return view('users.perfilUser');
    }

    
    Public function editUser(){
        return view('users.IDEdit');
    }

        
    Public function deleteUser(){
        return view('users.IDDelet');
    }

         
    Public function listUser( Request $request,$uid){
        print($uid);
    }
}
