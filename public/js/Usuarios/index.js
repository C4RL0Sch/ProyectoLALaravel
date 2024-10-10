
document.addEventListener('DOMContentLoaded', function(event){
    event.preventDefault();
    fetch('/api/Usuarios')
    .then(resp=>resp.json())
    .then(users =>{
        let tbody = document.querySelector('#Tbody');

        tbody.innerHTML='';

        for(let user of users){
            tbody.innerHTML+=`<tr>
                <td>${user.idUsuario}</td>
                <td>${user.nombre}</td>
                <td>${user.A_Paterno}</td>
                <td>${user.A_Materno}</td>
                <td>${user.Clave}</td>
                <td>${user.Telefono}</td>
                <td>${user.Correo}</td>
                <td style="white-space:nowrap">
                    <a class="btn btn-primary btn-sm" onclick="Edit(${user.idUsuario})">Editar</a>
                    <a class="btn btn-danger btn-sm" onclick="Delete(${user.idUsuario})">Borrar</a>
                </td>
            </tr>`;
        }
    });
});

function Edit(id){
    window.location.href='/Usuarios/Editar?id='+id;
}

function Delete(id){
    const check = confirm('¿Esta seguro de eliminar este usuario?');

    if(check){
        fetch('/api/Usuarios/Delete/'+id,{method:"DELETE"})
        .then(res=>{
        if(res.ok){
            console.log('Registro Eliminado');
            window.location.href='/Usuarios';
        }
        else{
            console.log('Error de borrado');
        }});
    }
}