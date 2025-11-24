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
        $userId = session()->get('id');

        $data = [
            'suscripciones' => $suscripcionModel->getSuscripcionesPorUsuario($userId)
        ];

        return view('cliente/dashboard', $data);
    }
}