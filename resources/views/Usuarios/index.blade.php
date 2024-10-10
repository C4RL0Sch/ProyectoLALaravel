<!-- resources/views/productos.blade.php -->
@extends('layouts.main') <!-- Indica que esta vista extiende de main.blade.php -->

@section('title', 'Lista de Usuarios') <!-- Opcionalmente puedes definir un título específico -->

@section('content')
<h1 class="text-center mb-5">USUARIOS</h1>

<div class="row mb-5">
    <div class="col">
        <a class="btn btn-primary">Agregar Usuario</a>
    </div>
    <div class="col">

    </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Clave</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($usuarios as $usuario)
        <tr>
            <td>$usuario->IdUsuario</td>
            <td>$usuario->Nombre</td>
            <td>$usuario->APaterno</td>
            <td>$usuario->AMaterno</td>
            <td>$usuario->Clave</td>
            <td>$usuario->Telefono</td>
            <td>$usuario->Correo</td>
            <td style="white-space:nowrap">
                <a class="btn btn-primary btn-sm">Editar</a>
                <a class="btn btn-danger btn-sm">Borrar</a>
            </td>
        </tr>
    @endforeach
    </tbody>

@endsection('content')  