<?php

namespace App\Services;

interface ILoginService{
    public function Validar($text);

    public function GenerateCaptcha();
}

?>