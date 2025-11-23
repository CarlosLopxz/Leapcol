<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
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
            'title' => 'Productos - Leapcol Admin',
            'productos' => $this->productoModel->getProductosConCategoria()
        ];

        return view('admin/Productos/productos', $data);
    }

    public function editar($id)
    {
        $producto = $this->productoModel->find($id);
        if (!$producto) {
            return redirect()->to(base_url('admin/productos'))->with('error', 'Producto no encontrado');
        }

        $data = [
            'title' => 'Editar Producto - Leapcol Admin',
            'producto' => $producto,
            'categorias' => $this->categoriaModel->getCategoriasActivas()
        ];

        return view('admin/Productos/editar', $data);
    }

    public function actualizar($id)
    {
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'categoria_id' => $this->request->getPost('categoria_id'),
            'precio' => $this->request->getPost('precio'),
            'precio_oferta' => $this->request->getPost('precio_oferta') ?: null,
            'stock' => $this->request->getPost('stock'),
            'descripcion' => $this->request->getPost('descripcion'),
            'estado' => $this->request->getPost('estado'),
            'mas_vendido' => $this->request->getPost('mas_vendido') ? 1 : 0
        ];

        $imagen = $this->request->getFile('imagen_principal');
        if ($imagen && $imagen->isValid() && !$imagen->hasMoved()) {
            $newName = $imagen->getRandomName();
            $imagen->move(ROOTPATH . 'public/assets/img/productos', $newName);
            $data['imagen_principal'] = $newName;
        }

        // Handle additional images
        $files = $this->request->getFileMultiple('imagenes_adicionales');
        $newImages = [];
        if ($files) {
            foreach ($files as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move(ROOTPATH . 'public/assets/img/productos', $newName);
                    $newImages[] = $newName;
                }
            }
        }

        if (!empty($newImages)) {
            $producto = $this->productoModel->find($id);
            $existingImages = json_decode($producto['imagenes_adicionales'] ?? '[]', true) ?? [];
            $allImages = array_merge($existingImages, $newImages);
            $data['imagenes_adicionales'] = json_encode($allImages);
        }

        $this->productoModel->update($id, $data);
        return redirect()->to(base_url('admin/productos'))->with('success', 'Producto actualizado correctamente');
    }

    public function crear()
    {
        $data = [
            'title' => 'Crear Producto - Leapcol Admin',
            'categorias' => $this->categoriaModel->getCategoriasActivas()
        ];

        return view('admin/Productos/crear', $data);
    }

    public function guardar()
    {
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'categoria_id' => $this->request->getPost('categoria_id'),
            'precio' => $this->request->getPost('precio'),
            'precio_oferta' => $this->request->getPost('precio_oferta') ?: null,
            'stock' => $this->request->getPost('stock'),
            'descripcion' => $this->request->getPost('descripcion'),
            'estado' => $this->request->getPost('estado'),
            'mas_vendido' => $this->request->getPost('mas_vendido') ? 1 : 0
        ];

        $imagen = $this->request->getFile('imagen_principal');
        if ($imagen && $imagen->isValid() && !$imagen->hasMoved()) {
            $newName = $imagen->getRandomName();
            $imagen->move(ROOTPATH . 'public/assets/img/productos', $newName);
            $data['imagen_principal'] = $newName;
        }

        // Handle additional images
        $files = $this->request->getFileMultiple('imagenes_adicionales');
        $additionalImages = [];
        if ($files) {
            foreach ($files as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move(ROOTPATH . 'public/assets/img/productos', $newName);
                    $additionalImages[] = $newName;
                }
            }
        }
        $data['imagenes_adicionales'] = json_encode($additionalImages);

        $this->productoModel->insert($data);
        return redirect()->to(base_url('admin/productos'))->with('success', 'Producto creado correctamente');
    }

    public function eliminar($id)
    {
        $this->productoModel->delete($id);
        return redirect()->to(base_url('admin/productos'))->with('success', 'Producto eliminado correctamente');
    }
}