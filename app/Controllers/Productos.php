<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        return view('productos/index');
    }

    public function erp()
    {
        return view('productos/erp');
    }

    public function crm()
    {
        return view('productos/crm');
    }

    public function pos()
    {
        return view('productos/pos');
    }

    public function ecommerce()
    {
        return view('productos/ecommerce');
    }
}