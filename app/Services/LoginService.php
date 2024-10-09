<?php
namespace App\Services;

class LoginService implements ILoginService{
    
    private $captchas=array(
        ["img\\1.png","img\\2.png","img\\3.png"],
        ["2VYK","W68HP","2W4M"]
    );
    
    public function Validar($text){
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
    
        return json_encode($errores);
    }

    public function GenerateCaptcha(){
        $rdn = random_int(0,2);
        $captcha2=array($this->captchas[0][$rdn],$this->captchas[1][$rdn]);
        return (json_encode($captcha2));
    }

}

?>