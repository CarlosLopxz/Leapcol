<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\CategoriaModel;

class Productos extends BaseController
{
    protected $productoModel;
    protected $categoriaModel;

    public function __construct()
    {
        $this->productoModel = new ProductoModel();
        $this->categoriaModel = new CategoriaModel();
    }

    public function index()
    {
        $data = [
            'productos' => $this->productoModel->getProductosConCategoria(),
            'categorias' => $this->categoriaModel->getCategoriasActivas()
        ];
        
        return view('productos/index', $data);
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