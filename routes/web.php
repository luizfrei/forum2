<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'listAllUsers'])->name('routeLlistAllUsers');
Route::get('/users/crete', [UserController:: class, 'createUser'])->name('create');
Route::get('/users/perfil', [UserController:: class, 'perfilUser'])->name('perfil');
Route::get('/users/perfil2', [UserController:: class, 'IDEdit'])->name('edit');
Route::get('/users/3', [UserController:: class, 'IdDelete'])->name('delete');
