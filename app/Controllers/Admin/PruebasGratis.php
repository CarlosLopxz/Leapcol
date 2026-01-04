<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PruebaGratisModel;

class PruebasGratis extends BaseController
{
    protected $pruebaModel;

    public function __construct()
    {
        $this->pruebaModel = new PruebaGratisModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("
            SELECT pg.*, u.name as usuario_nombre, u.email as usuario_email, 
                   p.nombre as producto_nombre
            FROM pruebas_gratis pg
            JOIN users u ON u.id = pg.user_id
            JOIN productos p ON p.id = pg.producto_id
            ORDER BY pg.created_at DESC
        ");
        
        $pruebas = $query->getResultArray();

        $data = [
            'title' => 'Pruebas Gratis - Admin',
            'pruebas' => $pruebas
        ];

        return view('admin/pruebas_gratis/index', $data);
    }

    public function cancelar($id)
    {
        $this->pruebaModel->update($id, ['estado' => 'cancelada']);
        return redirect()->to(base_url('admin/pruebas-gratis'))->with('success', 'Prueba gratis cancelada');
    }
}