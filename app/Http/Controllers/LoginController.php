<?php

namespace App\Http\Controllers;

use App\Services\ILoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $_service;

    public function __construct(ILoginService $service)
    {
        $this->_service= $service;
    }

    public function index(){
        return response()->file(resource_path('../public/views/login/index.html'));
    }

    public function ValidatePassword(Request $request){
        $pass = $request->password;
        return $this->_service->Validar($pass);
    }

    public function GenerateCaptcha(){
        return $this->_service->GenerateCaptcha();
    }
}
