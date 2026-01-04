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
        $userId = session()->get('user_id');
        $pruebaModel = new \App\Models\PruebaGratisModel();
        $sistemaModel = new \App\Models\SistemaModel();
        $pruebasActivas = [];
        $sistemas = [];
        
        if ($userId) {
            // Obtener todas las pruebas activas del usuario
            $pruebasActivas = $pruebaModel->where('user_id', $userId)
                                        ->where('estado', 'activa')
                                        ->where('fecha_expiracion >', date('Y-m-d H:i:s'))
                                        ->findAll();
        }
        
        // Obtener todos los sistemas activos
        $sistemas = $sistemaModel->where('activo', 1)->findAll();
        
        $data = [
            'title' => 'Productos - Leapcol',
            'productos' => $this->productoModel->getProductosConCategoria(),
            'categorias' => $this->categoriaModel->getCategoriasActivas(),
            'pruebas_activas' => $pruebasActivas,
            'sistemas' => $sistemas
        ];

        return $this->renderView('productos/index', $data);
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

        return $this->renderView('productos/detalle', $data);
    }

    public function erp()
    {
        return $this->renderView('productos/erp');
    }

    public function crm()
    {
        return $this->renderView('productos/crm');
    }

    public function pos()
    {
        return $this->renderView('productos/pos');
    }

    public function ecommerce()
    {
        return $this->renderView('productos/ecommerce');
    }
}