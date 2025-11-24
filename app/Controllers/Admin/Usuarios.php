<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Usuarios extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'usuarios' => $this->userModel->findAll(),
            'titulo' => 'Administración de Usuarios'
        ];

        return view('admin/usuarios/index', $data);
    }

    public function crear()
    {
        $data = [
            'titulo' => 'Crear Usuario'
        ];

        return view('admin/usuarios/crear', $data);
    }

    public function guardar()
    {
        $rules = [
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'rol' => 'required|in_list[administrador,cliente]',
            'estado' => 'required|in_list[activo,inactivo]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'rol' => $this->request->getPost('rol'),
            'estado' => $this->request->getPost('estado')
        ];

        $this->userModel->insert($data);

        return redirect()->to(base_url('admin/usuarios'))->with('mensaje', 'Usuario creado exitosamente');
    }

    public function editar($id)
    {
        $usuario = $this->userModel->find($id);

        if (!$usuario) {
            return redirect()->to(base_url('admin/usuarios'))->with('error', 'Usuario no encontrado');
        }

        $data = [
            'usuario' => $usuario,
            'titulo' => 'Editar Usuario'
        ];

        return view('admin/usuarios/editar', $data);
    }

    public function actualizar($id)
    {
        $usuario = $this->userModel->find($id);

        if (!$usuario) {
            return redirect()->to(base_url('admin/usuarios'))->with('error', 'Usuario no encontrado');
        }

        $rules = [
            'email' => "required|valid_email|is_unique[users.email,id,{$id}]",
            'rol' => 'required|in_list[administrador,cliente]',
            'estado' => 'required|in_list[activo,inactivo]'
        ];

        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $rules['password'] = 'min_length[6]';
        }

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'email' => $this->request->getPost('email'),
            'rol' => $this->request->getPost('rol'),
            'estado' => $this->request->getPost('estado')
        ];

        if (!empty($password)) {
            $data['password'] = $password;
        }

        $this->userModel->update($id, $data);

        return redirect()->to(base_url('admin/usuarios'))->with('mensaje', 'Usuario actualizado exitosamente');
    }

    public function eliminar($id)
    {
        $usuario = $this->userModel->find($id);

        if (!$usuario) {
            return redirect()->to(base_url('admin/usuarios'))->with('error', 'Usuario no encontrado');
        }

        $this->userModel->delete($id);

        return redirect()->to(base_url('admin/usuarios'))->with('mensaje', 'Usuario eliminado exitosamente');
    }
}
