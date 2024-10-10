<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index(){
        return response()->file(resource_path('../public/views/Productos/index.html'));
    }

    public function getAll(){
        $usuarios=Producto::all();

        return response()->json($usuarios);
    }

    public function Create(){
        return response()->file(resource_path('../public/views/Productos/create.html'));
    }
}
