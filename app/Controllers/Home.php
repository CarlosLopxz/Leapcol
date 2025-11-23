<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        helper('text');
        $productoModel = new \App\Models\ProductoModel();
        $data = [
            'title' => 'Inicio - Leapcol',
            'productos' => $productoModel->getRecentProducts(6)
        ];
        return view('home', $data);
    }
}
