document.addEventListener('DOMContentLoaded', async function(event){
    event.preventDefault();
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    console.log(id);

    const resp = await fetch('/api/Usuarios/'+id);
    const data = await resp.json();
    console.log(data);

    document.querySelector('#idUsuario').value=data.idUsuario;
    document.querySelector('#nombre').value=data.nombre;
    document.querySelector('#A_Paterno').value=data.A_Paterno;
    document.querySelector('#A_Materno').value=data.A_Materno;
    document.querySelector('#Clave').value=data.Clave;
    document.querySelector('#Telefono').value=data.Telefono;
    document.querySelector('#Correo').value=data.Correo;
});

document.querySelector('#Cancel').addEventListener('click',function(){
    window.location.href='/Usuarios';
});

async function Update(){
    const form = document.querySelector('#EditForm');
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);
    console.log(JSON.stringify(data));

    const resp = await fetch('/api/Usuarios/Edit/'+data.idUsuario,{
        method: "PUT",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    });
    
    if(resp.ok){
        console.log('Editado correctamente');
        window.location.href='/Usuarios';
    }
    else{
        console.log('Error al editar');
    }

}