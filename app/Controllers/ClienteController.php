<?php

namespace App\Controllers;

class ClienteController extends BaseController
{
    public function dashboard()
    {
        if (!session()->get('logged_in') || session()->get('rol') !== 'cliente') {
            return redirect()->to('/login');
        }

        return view('cliente/dashboard');
    }
}