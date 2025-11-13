<?php
class Error extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_tag'] = "Error 404 - " . NOMBRE_SISTEMA;
        $data['page_title'] = "Página no encontrada";
        $data['page_name'] = "error";
        $this->view("error", $data);
    }
}