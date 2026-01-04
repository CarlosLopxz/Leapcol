<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class SistemaController extends BaseController
{
    public function index($producto_id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($producto_id);
        
        if (!$producto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Sistema no encontrado');
        }
        
        $data = [
            'title' => 'Sistema ' . $producto['nombre'],
            'producto' => $producto
        ];
        
        return view('sistema/dashboard', $data);
    }
    
    public function login()
    {
        return view('sistema/login');
    }
    
    public function cambiarPassword()
    {
        return view('sistema/cambiar-password');
    }
    
    public function dashboard()
    {
        // Simular login exitoso para demo
        $session = session();
        $session->set('sistema_logged_in', true);
        
        // Obtener información del producto
        $producto = [
            'id' => 1,
            'nombre' => 'Sistema ERP',
            'descripcion' => 'Sistema de gestión empresarial'
        ];
        
        return view('sistema/dashboard', ['producto' => $producto]);
    }
}