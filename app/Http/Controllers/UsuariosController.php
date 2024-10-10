<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        return response()->file(resource_path('../public/views/Usuarios/index.html'));
    }

    public function getAll(){
        $usuarios=Usuario::all();

        return response()->json($usuarios);
    }

    public function getById($idUsuario){
        $usuario=Usuario::find($idUsuario);
        
        if($usuario)
        {
            return response()->json($usuario, 200);
        }
        
        return response()->json(['message' => 'Usuario no encontrado'], 404);
    }

    public function Create(){
        return response()->file(resource_path('../public/views/Usuarios/create.html'));
    }

    public function Insert(Request $request){
        //return response()->json($request);
        try{
            $usuario = Usuario::create($request->all());
        }
        catch(Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->json($usuario,201);
    }

    public function Edit(){
        return response()->file(resource_path('../public/views/Usuarios/edit.html'));
    }

    public function Update(Request $request,$id){
        $usuario = Usuario::find($id);
        
        if ($usuario) {
            $usuario->update($request->all());
            return response()->json($usuario,201);
        }
        return response()->json(['message' => 'Usuario no encontrado'], 404);

        return view();
    }

    public function Delete($idUsuario){
        $usuario=Usuario::find($idUsuario);
        if($usuario){
            $usuario->delete();
            return response()->json(['message' => 'Usuario eliminado correctamente'], 200);
        }
        return response()->json(['message' => 'Usuario no encontrado'], 404);
    }
}
