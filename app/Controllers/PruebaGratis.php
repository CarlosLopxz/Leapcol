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
        
        $pruebaModel = new \App\Models\PruebaGratisModel();
        $userId = session()->get('user_id');
        
        if ($pruebaModel->crearPrueba($userId, $productoId)) {
            session()->setFlashdata('swal_success', 'Prueba gratis activada por 14 días');
        } else {
            session()->setFlashdata('swal_error', 'Error al activar la prueba');
        }
        
        return redirect()->to('/prueba-gratis/' . $productoId);
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