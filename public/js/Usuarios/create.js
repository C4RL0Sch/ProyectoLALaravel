async function Guardar(){
    const form = document.querySelector('#CreateForm');
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);
    console.log(JSON.stringify(data));
    const resp = await fetch('/api/Usuarios/Create',{
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    });
    if(resp.ok){
        console.log('Guardado correctamente');
        window.location.href='/Usuarios';
    }
    else{
        console.log('Error al guardar');
    }
}