<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class Categorias extends BaseController
{
    protected $categoriaModel;

    public function __construct()
    {
        $this->categoriaModel = new CategoriaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Categorías - Leapcol Admin',
            'categorias' => $this->categoriaModel->getCategoriasConProductos()
        ];

        return view('admin/Categorias/categorias', $data);
    }

    public function editar($id)
    {
        return redirect()->to(base_url('admin/categorias'));
    }

    public function eliminar($id)
    {
        return redirect()->to(base_url('admin/categorias'));
    }
}