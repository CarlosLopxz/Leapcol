<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class CompraController extends BaseController
{
    public function index($producto_id)
    {
        // Verificar si el usuario está logueado
        if (!session()->get('logged_in')) {
            // Guardar la URL de destino para redirigir después del login
            session()->set('redirect_after_login', current_url());
            session()->setFlashdata('swal_info', 'Debes iniciar sesión para comprar productos.');
            return redirect()->to('/login');
        }
        
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($producto_id);
        
        if (!$producto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Producto no encontrado');
        }
        
        $data = [
            'producto' => $producto,
            'title' => 'Comprar - ' . $producto['nombre'],
            'isLoggedIn' => session()->get('logged_in') ?? false,
            'userName' => session()->get('name') ?? '',
            'panelUrl' => session()->get('rol') === 'administrador' ? 'admin/dashboard' : 'cliente/dashboard'
        ];
        
        return view('compra/index', $data);
    }
    
    public function procesar()
    {
        $data = $this->request->getPost();
        
        // Aquí puedes agregar la lógica para procesar el pago
        // Por ahora solo redirigimos con un mensaje de éxito
        
        session()->setFlashdata('swal_success', 'Compra procesada exitosamente. Te contactaremos pronto.');
        
        return redirect()->to('/productos');
    }
}