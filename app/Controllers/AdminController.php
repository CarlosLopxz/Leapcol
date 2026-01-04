<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        if (!session()->get('logged_in') || session()->get('rol') !== 'administrador') {
            return redirect()->to('/login');
        }

        // Debug temporal - eliminar después
        $userModel = new \App\Models\UserModel();
        $user = $userModel->find(session('user_id'));
        if ($user && !session('name')) {
            session()->set('name', $user['name']);
        }

        return view('admin/dashboard');
    }
}