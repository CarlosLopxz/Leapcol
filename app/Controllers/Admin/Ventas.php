<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SuscripcionModel;

class Ventas extends BaseController
{
    protected $suscripcionModel;

    public function __construct()
    {
        $this->suscripcionModel = new SuscripcionModel();
    }

    public function index()
    {
        $ventas = $this->suscripcionModel->getSuscripcionesConDetalles();

        $data = [
            'title' => 'Ventas - Admin',
            'ventas' => $ventas
        ];

        return view('admin/ventas/index', $data);
    }
}