<?php
class Dashboard extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_tag'] = "Dashboard - " . NOMBRE_SISTEMA;
        $data['page_title'] = "Dashboard";
        $data['page_name'] = "dashboard";
        $this->view("index", $data);
    }
}