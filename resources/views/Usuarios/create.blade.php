<!-- resources/views/productos.blade.php -->
@extends('layouts.main') <!-- Indica que esta vista extiende de main.blade.php -->

@section('title', 'Crear Usuario') <!-- Opcionalmente puedes definir un título específico -->

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto rounded border p-3">
        <h2 class="text-center mb-5">Agregar Usuario</h2>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-8">
                    <input class="form-control"/>
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-8">
                    <input class="form-control" />
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-8">
                    <input class="form-control" />
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-8">
                    <input class="form-control" />
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-8">
                    <input class="form-control" />
                    <span  class="text-danger"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-8">
                    <input class="form-control" />
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="offset-sm-4 col-sm-4 d-grid">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <div class="col-sm-4 d-grid">
                    <a class="btn btn-outline-primary" role="button">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection('content')