<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('login/index');
    }

    public function authenticate()
    {
        $userModel = new UserModel();
        
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (empty($email) || empty($password)) {
            return redirect()->back()->with('swal_error', 'Por favor completa todos los campos');
        }

        $user = $userModel->where('email', $email)->where('estado', 'activo')->first();

        if ($user && $userModel->verifyPassword($password, $user['password'])) {
            session()->set([
                'user_id' => $user['id'],
                'email' => $user['email'],
                'rol' => $user['rol'],
                'logged_in' => true
            ]);

            session()->setFlashdata('swal_success', 'Conectado, redirigiendo...');

            if ($user['rol'] === 'administrador') {
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->to('/cliente/dashboard');
            }
        }

        return redirect()->back()->with('swal_error', 'Credenciales incorrectas o usuario inactivo');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}