<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::post('/VerifyPassword',[LoginController::class,'ValidatePassword']);

Route::get('/GenerateCaptcha',[LoginController::class,'GenerateCaptcha']);

Route::get('/Usuarios',[UsuariosController::class,'getAll']);

Route::post('/Usuarios/Create',[UsuariosController::class,'Insert']);

Route::delete('/Usuarios/Delete/{id}',[UsuariosController::class,'Delete']);

Route::get('/Usuarios/{id}',[UsuariosController::class,'getById']);

Route::put('/Usuarios/Edit/{id}',[UsuariosController::class,'Update']);

Route::get('/Productos',[ProductosController::class,'getAll']);