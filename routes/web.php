<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[LoginController::class, 'index']);

Route::get('/Usuarios',[UsuariosController::class,'index']);

Route::get('/Usuarios/Crear',[UsuariosController::class,'Create']);

Route::get('/Usuarios/Editar',[UsuariosController::class,'Edit']);

Route::get('/Productos',[ProductosController::class,'index']);

Route::get('/Productos/Crear',[ProductosController::class,'Create']);