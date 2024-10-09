let cont = 0;
let captcha='';

async function validar() {
    let pass = document.getElementById('txt_password').value;
    console.log(JSON.stringify(pass));
    let resp = await fetch('/api/VerifyPassword', {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
            password: pass
        }),
      });
    let errores = await resp.json();
    revisar(errores);
}

async function revisar(errores) {
    let msg = '';
    for (let i = 0; i < errores.length; i++) {
        msg += errores[i];
    }
    //console.log(msg)

    if (msg.length > 0) {
        cont++;
        alert(msg);

        if (cont >= 3) {
            block();
        }
    }
    else {
        let data = await GenerateCaptcha();
        console.log(data);
        let image = document.querySelector("#modal-body img");
        image.setAttribute("src", data[0]);
        captcha=data[1];
        open();
    }
}

async function GenerateCaptcha(){
    let resp = await fetch('/api/GenerateCaptcha');
    let captcha = await resp.json();
    console.log(captcha);
    return captcha;
}

function Captched() {
    let text = document.querySelector("#txt_captcha").value;
    console.log(captcha);
    if (text === captcha) {
        alert("Captcha correcto");
        //window.location.href = '/';
    }
    else {
        alert("texto incorrecto");
        cont++;
        if (cont >= 3) {
            close();
            block();
        }
    }
}

//var openModal = document.getElementById('open_modal');
var closeModal = document.getElementById('close_modal');
var fondoModal = document.getElementById('fondoModal');
var modal = document.getElementById('modal');

function close() {
    modal.style.display = "none";
    fondoModal.style.display = "none";
}

function open() {
    modal.style.display = "block";
    fondoModal.style.display = "block";
}

function block(){
    let user = document.getElementById('txt_username');
    let pass = document.getElementById('txt_password');

    pass.disabled=true;
    pass.value='';
    user.disabled=true;
    user.value='';
}

//openModal.addEventListener('click', open);
closeModal.addEventListener('click', close);
fondoModal.addEventListener('click', close);