document.addEventListener('DOMContentLoaded', function(event){
    event.preventDefault();
    fetch('/api/Productos')
    .then(resp=>resp.json())
    .then(productos =>{
        let tbody = document.querySelector('#Tbody');

        tbody.innerHTML='';

        for(let producto of productos){
            tbody.innerHTML+=`<tr>
            <td>${producto.idProducto}</td>
            <td>${producto.Cod_Barras}</td>
            <td>${producto.Nombre}</td>
            <td>${producto.Cantidad}</td>
            <td>${producto.Proveedores}</td>
            <td>${producto.Especificaciones}</td>
            <td>${producto.Fecha_Caducidad}</td>
            <td>${producto.Costo_compra}</td>
            <td>${producto.Costo_venta}</td>
            <td style="white-space:nowrap">
                <a class="btn btn-primary btn-sm" onclick="Edit(${producto.idProducto})">Editar</a>
                <a class="btn btn-danger btn-sm" onclick="Delete(${producto.idProducto})">Borrar</a>
            </td>
            </tr>`;
        }
    });
});

function Edit(id){
    window.location.href='/Productos/Editar?id='+id;
}

function Delete(id){
    const check = confirm('¿Esta seguro de eliminar este producto?');

    if(check){
        fetch('/api/Productos/Delete/'+id,{method:"DELETE"})
        .then(res=>{
        if(res.ok){
            console.log('Registro Eliminado');
            window.location.href='/Productos';
        }
        else{
            console.log('Error de borrado');
        }});
    }
}