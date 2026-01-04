<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Config\GoogleOAuth;
use Google\Client as GoogleClient;

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
                'name' => $user['name'],
                'email' => $user['email'],
                'rol' => $user['rol'],
                'logged_in' => true
            ]);

            session()->setFlashdata('swal_success', 'Conectado, redirigiendo...');

            // Verificar si hay una URL de redirección guardada
            $redirectUrl = session()->get('redirect_after_login');
            if ($redirectUrl) {
                session()->remove('redirect_after_login');
                return redirect()->to($redirectUrl);
            }

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

    public function register()
    {
        return view('Register/index');
    }

    public function store()
    {
        $userModel = new UserModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (empty($name) || empty($email) || empty($password)) {
            return redirect()->back()->with('swal_error', 'Por favor completa todos los campos');
        }

        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'estado' => 'activo',
            'rol' => 'cliente'
        ];

        if ($userModel->insert($data)) {
            return redirect()->to('/login')->with('swal_success', 'Usuario registrado exitosamente. Ahora puedes iniciar sesión.');
        } else {
            $errors = $userModel->errors();
            $errorMessage = 'Error al registrar usuario';
            
            if (isset($errors['email'])) {
                $errorMessage = 'El correo electrónico ya está registrado';
            }
            
            return redirect()->back()->with('swal_error', $errorMessage);
        }
    }

    public function googleLogin()
    {
        $config = new GoogleOAuth();
        $client = new GoogleClient();
        
        $client->setClientId($config->clientId);
        $client->setClientSecret($config->clientSecret);
        $client->setRedirectUri($config->redirectUri);
        $client->setScopes($config->scopes);
        
        $authUrl = $client->createAuthUrl();
        return redirect()->to($authUrl);
    }

    public function googleCallback()
    {
        $config = new GoogleOAuth();
        $client = new GoogleClient();
        
        $client->setClientId($config->clientId);
        $client->setClientSecret($config->clientSecret);
        $client->setRedirectUri($config->redirectUri);
        $client->setScopes($config->scopes);
        
        $code = $this->request->getGet('code');
        
        if (!$code) {
            return redirect()->to('/login')->with('swal_error', 'Error en la autenticación con Google');
        }
        
        try {
            $token = $client->fetchAccessTokenWithAuthCode($code);
            
            if (isset($token['error'])) {
                return redirect()->to('/login')->with('swal_error', 'Error al obtener token de Google');
            }
            
            $client->setAccessToken($token);
            $oauth2 = new \Google\Service\Oauth2($client);
            $userInfo = $oauth2->userinfo->get();
            
            $userModel = new UserModel();
            
            // Buscar usuario existente
            $existingUser = $userModel->where('email', $userInfo->email)->first();
            
            if ($existingUser) {
                // Usuario existe, iniciar sesión
                session()->set([
                    'user_id' => $existingUser['id'],
                    'name' => $existingUser['name'],
                    'email' => $existingUser['email'],
                    'rol' => $existingUser['rol'],
                    'logged_in' => true
                ]);
                
                if ($existingUser['rol'] === 'administrador') {
                    return redirect()->to('/admin/dashboard');
                } else {
                    return redirect()->to('/cliente/dashboard');
                }
            } else {
                // Crear nuevo usuario
                $userData = [
                    'name' => $userInfo->name ?? $userInfo->email,
                    'email' => $userInfo->email,
                    'password' => password_hash(uniqid(), PASSWORD_DEFAULT), // Password temporal
                    'estado' => 'activo',
                    'rol' => 'cliente'
                ];
                
                $userId = $userModel->insert($userData);
                
                if ($userId) {
                    session()->set([
                        'user_id' => $userId,
                        'name' => $userInfo->name ?? $userInfo->email,
                        'email' => $userInfo->email,
                        'rol' => 'cliente',
                        'logged_in' => true
                    ]);
                    
                    return view('Auth/creating_account', ['redirectUrl' => base_url('/cliente/dashboard')]);
                } else {
                    return redirect()->to('/login')->with('swal_error', 'Error al crear la cuenta');
                }
            }
            
        } catch (\Exception $e) {
            return redirect()->to('/login')->with('swal_error', 'Error en la autenticación: ' . $e->getMessage());
        }
    }
}