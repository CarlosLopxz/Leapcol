<?php
class Login extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $data['page_tag'] = "Login - " . NOMBRE_SISTEMA;
        $data['page_title'] = "Iniciar Sesión";
        $data['page_name'] = "login";
        $this->view("login", $data);
    }
}