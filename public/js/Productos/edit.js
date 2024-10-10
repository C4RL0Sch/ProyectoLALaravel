document.addEventListener('DOMContentLoaded', async function(event){
    event.preventDefault();
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    console.log(id);

    const resp = await fetch('/api/Productos/'+id);
    const data = await resp.json();
    console.log(data);

    document.querySelector('#idProducto').value=data.idProducto;
    document.querySelector('#Cod_Barras').value=data.Cod_Barras;
    document.querySelector('#Nombre').value=data.Nombre;
    document.querySelector('#Cantidad').value=data.Cantidad;
    document.querySelector('#Proveedores').value=data.Proveedores;
    document.querySelector('#Especificaciones').value=data.Especificaciones;
    document.querySelector('#Fecha_Caducidad').value=data.Fecha_Caducidad;
    document.querySelector('#Costo_compra').value=data.Costo_compra;
    document.querySelector('#Costo_venta').value=data.Costo_venta;
});

document.querySelector('#Cancel').addEventListener('click',function(){
    window.location.href='/Productos';
});

async function Update() {
    const form = document.querySelector('#EditForm');
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);
    console.log(JSON.stringify(data));

    const resp = await fetch('/api/Productos/Edit/'+data.idProducto,{
        method: "PUT",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    });
    
    if(resp.ok){
        console.log('Editado correctamente');
        window.location.href='/Productos';
    }
    else{
        console.log('Error al editar');
    }
}