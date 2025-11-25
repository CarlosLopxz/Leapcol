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
            'title' => 'Productos - Leapcol',
            'productos' => $this->productoModel->getProductosConCategoria(),
            'categorias' => $this->categoriaModel->getCategoriasActivas()
        ];

        return view('productos/index', $data);
    }

    public function detalle($id)
    {
        $producto = $this->productoModel->find($id);

        if (!$producto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Decode additional images if they exist
        if (!empty($producto['imagenes_adicionales'])) {
            $producto['imagenes_adicionales'] = json_decode($producto['imagenes_adicionales'], true);
        } else {
            $producto['imagenes_adicionales'] = [];
        }

        $data = [
            'title' => $producto['nombre'] . ' - Leapcol',
            'producto' => $producto,
            'relacionados' => $this->productoModel->getProductosRelacionados($producto['categoria_id'], $producto['id'])
        ];

        return view('productos/detalle', $data);
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