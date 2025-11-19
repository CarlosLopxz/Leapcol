<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        if (!session()->get('logged_in') || session()->get('rol') !== 'administrador') {
            return redirect()->to('/login');
        }

        return view('admin/dashboard');
    }
}