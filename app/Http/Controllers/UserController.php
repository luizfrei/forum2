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

    
    Public function IDEdit(){
        return view('users.IDEdit');
    }

        
    Public function IdDelete(){
        return view('users.IDDelet');
    }
}
