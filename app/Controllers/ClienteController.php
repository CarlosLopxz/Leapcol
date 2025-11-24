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
        $userId = session()->get('user_id');

        $suscripciones = $suscripcionModel->getSuscripcionesPorUsuario($userId);

        $data = [
            'suscripciones' => $suscripciones
        ];

        return view('cliente/dashboard', $data);
    }
}