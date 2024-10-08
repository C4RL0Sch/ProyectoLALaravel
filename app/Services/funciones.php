<?php
$captchas=array(
    ["img\\1.png","img\\2.png","img\\3.png"],
    ["2VYK","W68HP","2W4M"]
);

$opc=$_GET["opc"];

if($opc==1){
    $pass=$_GET["text"];
    
    echo(json_encode(Validar($pass)));
}
else if($opc==2){
    $rdn = random_int(0,2);
    $captcha2=array($captchas[0][$rdn],$captchas[1][$rdn]);
    echo(json_encode($captcha2));
}

function Validar($text){
    $errores=array();

    if(strlen($text)<8){
        array_push($errores,"La contraseña debe contener almenos 8 caracteres\n");
    }

    if(preg_match('/[a-z]/', $text)==0){
        array_push($errores, "La contraseña debe contener almenos una letra minuscula\n");
    }

    if(preg_match('/[A-Z]/', $text)==0){
        array_push($errores, "La contraseña debe contener almenos una letra mayuscula\n");
    }

    if(preg_match('/[$@$!%*?&]/', $text)==0){
        array_push($errores, "La contraseña debe contener almenos un caracter especial\n");
    }

    return $errores;
}

?>