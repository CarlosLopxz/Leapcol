<?php

namespace App\Controllers\Sistemas;

use App\Controllers\BaseController;

class InventarioController extends BaseController
{
    public function login()
    {
        // Si no hay sesión del sistema principal, mostrar error 404
        if (!session()->get('logged_in')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Página no encontrada');
        }
        
        // Si ya hay sesión del sistema principal, redirigir directamente al dashboard
        session()->set([
            'inventario_logged_in' => true,
            'inventario_user' => session()->get('name') ?? session()->get('email') ?? 'Usuario',
            'inventario_username' => session()->get('email')
        ]);
        return redirect()->to('/inventario/dashboard');
    }
    
    public function authenticate()
    {
        $request = $this->request;
        $username = $request->getPost('username');
        $password = $request->getPost('password');
        
        // Validación simple para demo
        if ($username === 'admin' && $password === 'admin123') {
            session()->set([
                'inventario_logged_in' => true,
                'inventario_user' => 'Administrador',
                'inventario_username' => $username
            ]);
            
            return redirect()->to('/inventario/dashboard');
        }
        
        session()->setFlashdata('error', 'Credenciales incorrectas');
        return redirect()->to('/inventario/login');
    }
    
    public function dashboard()
    {
        // Verificar si hay sesión del inventario o del sistema principal
        if (!session()->get('inventario_logged_in')) {
            if (session()->get('logged_in')) {
                // Auto-login si hay sesión del sistema principal
                session()->set([
                    'inventario_logged_in' => true,
                    'inventario_user' => session()->get('name') ?? session()->get('email') ?? 'Usuario',
                    'inventario_username' => session()->get('email')
                ]);
            } else {
                return redirect()->to('/inventario/login');
            }
        }
        
        // Obtener información de la prueba gratis del usuario principal
        $userId = session()->get('user_id');
        $sistemaModel = new \App\Models\SistemaModel();
        $sistema = $sistemaModel->getSistemaPorCodigo('inventario');
        
        if (!$userId && $sistema) {
            // Si no hay user_id en sesión, obtenerlo de la prueba más reciente
            $db = \Config\Database::connect();
            $query = $db->query("SELECT user_id FROM pruebas_gratis WHERE producto_id = ? AND estado = 'activa' ORDER BY created_at DESC LIMIT 1", [$sistema['producto_id']]);
            $result = $query->getRow();
            $userId = $result ? $result->user_id : null;
        }
        $pruebaModel = new \App\Models\PruebaGratisModel();
        $userModel = new \App\Models\UserModel();
        
        $prueba = null;
        $usuario = null;
        $diasRestantes = 0;
        
        if ($userId && $sistema) {
            $prueba = $pruebaModel->getPruebaActiva($userId, $sistema['producto_id']);
            $usuario = $userModel->find($userId);
            
            // Calcular días restantes
            if ($prueba) {
                $fechaExpiracion = new \DateTime($prueba['fecha_expiracion']);
                $fechaActual = new \DateTime();
                $diferencia = $fechaActual->diff($fechaExpiracion);
                $diasRestantes = $diferencia->days;
            }
        }
        
        $data = [
            'title' => 'Dashboard - Sistema de Inventario',
            'user' => session()->get('inventario_user'),
            'cliente' => $usuario,
            'prueba' => $prueba,
            'dias_restantes' => $diasRestantes
        ];
        
        return view('sistemas/Inventario/dashboard', $data);
    }
    
    public function logout()
    {
        session()->remove(['inventario_logged_in', 'inventario_user', 'inventario_username']);
        return redirect()->to('/inventario/login');
    }
}