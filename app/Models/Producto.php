<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'idProducto';
    protected $fillable = ['Cod_Barras','Nombre','Cantidad','Proveedores','Especificaciones','Fecha_Caducidad','Costo_compra','Costo_venta'];
}
