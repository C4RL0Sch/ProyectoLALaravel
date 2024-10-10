<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Exception;
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

    public function getById($idProducto){
        $producto=Producto::find($idProducto);
        
        if($producto)
        {
            return response()->json($producto, 200);
        }
        
        return response()->json(['message' => 'Producto no encontrado'], 404);
    }

    public function Create(){
        return response()->file(resource_path('../public/views/Productos/create.html'));
    }

    public function Insert(Request $request){
        try{
            $producto = Producto::create($request->all());
        }
        catch(Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->json($producto,201);
    }

    public function Edit(){
        return response()->file(resource_path('../public/views/Productos/edit.html'));
    }

    public function Update(Request $request,$id){
        $producto = Producto::find($id);
        
        if ($producto) {
            $producto->update($request->all());
            return response()->json($producto,201);
        }
        return response()->json(['message' => 'Producto no encontrado'], 404);
    }

    public function Delete($idProducto){
        $producto=Producto::find($idProducto);
        if($producto){
            $producto->delete();
            return response()->json(['message' => 'Producto eliminado correctamente'], 200);
        }
        return response()->json(['message' => 'Producto no encontrado'], 404);
    }
}
