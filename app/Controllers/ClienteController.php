<?php

namespace App\Controllers;

class ClienteController extends BaseController
{
    public function dashboard()
    {
        if (!session()->get('logged_in') || session()->get('rol') !== 'cliente') {
            return redirect()->to('/login');
        }

        $suscripcionModel = new \App\Models\SuscripcionModel();
        $pruebaModel = new \App\Models\PruebaGratisModel();
        $userId = session()->get('user_id');

        $suscripciones = $suscripcionModel->getSuscripcionesPorUsuario($userId);
        $pruebasActivas = $pruebaModel->where('pruebas_gratis.user_id', $userId)
                                    ->where('pruebas_gratis.estado', 'activa')
                                    ->where('pruebas_gratis.fecha_expiracion >', date('Y-m-d H:i:s'))
                                    ->join('productos', 'productos.id = pruebas_gratis.producto_id')
                                    ->select('pruebas_gratis.*, productos.nombre as nombre_producto, productos.imagen_principal')
                                    ->findAll();

        $data = [
            'suscripciones' => $suscripciones,
            'pruebas_activas' => $pruebasActivas
        ];

        return view('cliente/dashboard', $data);
    }
}