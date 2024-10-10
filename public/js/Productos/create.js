async function Guardar(){
    const form = document.querySelector('#FormCreate');
    const formData = new FormData(form);
    let data = Object.fromEntries(formData);
    console.log(JSON.stringify(data));
    const resp = await fetch('/api/Productos/Create',{
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    });
    if(resp.ok){
        console.log('Guardado correctamente');
        window.location.href='/Productos';
    }
    else{
        console.log('Error al guardar');
    }
}