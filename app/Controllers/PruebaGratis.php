<?php

namespace App\Controllers;

class PruebaGratis extends BaseController
{
    public function index($productoId = null)
    {
        // Verificar si el usuario está logueado
        if (!session()->get('logged_in')) {
            session()->setFlashdata('swal_info', 'Debes iniciar sesión para solicitar una prueba gratis.');
            return redirect()->to('/login');
        }
        
        $productoModel = new \App\Models\ProductoModel();
        $pruebaModel = new \App\Models\PruebaGratisModel();
        $userId = session()->get('user_id');
        
        if (!$productoId) {
            return redirect()->to('/productos');
        }
        
        $producto = $productoModel->find($productoId);
        if (!$producto) {
            return redirect()->to('/productos');
        }
        
        // Verificar si ya tiene una prueba activa
        $pruebaActiva = $pruebaModel->getPruebaActiva($userId, $productoId);
        
        $data = [
            'title' => 'Prueba Gratis - Leapcol',
            'producto' => $producto,
            'prueba' => $pruebaActiva
        ];
        
        return $this->renderView('prueba_gratis/index', $data);
    }
    
    public function activar($productoId)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        
        $productoModel = new \App\Models\ProductoModel();
        $pruebaModel = new \App\Models\PruebaGratisModel();
        $userId = session()->get('user_id');
        
        $producto = $productoModel->find($productoId);
        
        if (!$producto) {
            return redirect()->to('/productos');
        }
        
        // Verificar si ya tiene una prueba activa
        $pruebaActiva = $pruebaModel->getPruebaActiva($userId, $productoId);
        
        if (!$pruebaActiva) {
            // Crear nueva prueba gratis
            $pruebaModel->crearPrueba($userId, $productoId);
        }
        
        // Mostrar loader por 20 segundos
        $data = [
            'title' => 'Activando Sistema - Leapcol',
            'producto' => $producto
        ];
        
        return view('prueba_gratis/loader', $data);
    }
    
    public function cancelar($productoId)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        
        $pruebaModel = new \App\Models\PruebaGratisModel();
        $userId = session()->get('user_id');
        
        $pruebaModel->where('user_id', $userId)
                   ->where('producto_id', $productoId)
                   ->where('estado', 'activa')
                   ->set(['estado' => 'cancelada'])
                   ->update();
        
        session()->setFlashdata('swal_info', 'Prueba gratis cancelada');
        return redirect()->to('/prueba-gratis/' . $productoId);
    }
}