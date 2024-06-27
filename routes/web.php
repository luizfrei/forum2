<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('layouts.gpt');
});


Route::match (['get','post'],'/login',
    [AuthController::class, 'loginUser']
    )->name('login');

Route::get('/logout',
    [AuthController:: class, 'logoutUser']
    )->name('logout');

Route::match (['get','post'],'/register',
    [UserController::class, 'registerUser']
    )->name('register');


Route::middleware('auth')->group(function(){
    Route::get('/users',
    [UserController::class, 'listAllUsers']
    )->name('listAllUsers');

Route::get('/users/{uid}',
    [UserController::class, 'listUser']
    )->name('listUser');

    Route::put('/users/{uid}/update',
     [UserController::class, 'updateUser']
     )->name('UpdateUser');

     Route::delete('/users/{uid}/delete',
     [UserController::class, 'deleteUser']
     )->name('DeleteUser');
});

Route::get('/criar', function () {
    return view('criar');
});
Route::get('/visualizar', function () {
    return view('visualizar');
});

//Route::get('/user/{uid}', [UserController:: class, 'listUser'])->name('listUser');
Route::get('/users/perfil2', [UserController:: class, 'editUser'])->name('edit');
Route::get('/users/3', [UserController:: class, 'deleteUser'])->name('delete');
