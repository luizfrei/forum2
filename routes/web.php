<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'listAllUsers'])->name('routeLlistAllUsers');
Route::get('/users/create', [UserController:: class, 'createUser'])->name('create');
Route::get('/users/perfil', [UserController:: class, 'perfilUser'])->name('perfil');
Route::get('/users/perfil2', [UserController:: class, 'editUser'])->name('edit');
Route::get('/users/3', [UserController:: class, 'deleteUser'])->name('delete');


Route::match (['get','post'],'/login',[AuthController::class, 'loginUser'])->name('login');

Route::get('/users/{uid}', [UserController::class, 'listUser'])->name('listUser');
