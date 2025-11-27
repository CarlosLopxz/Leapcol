<?php

namespace App\Controllers;

class Contacto extends BaseController
{
    public function index(): string
    {
        $title = 'Contacto - Leapcol';
        return view('contacto/index', compact('title'));
    }

    public function enviar()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nombre' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'asunto' => 'required',
            'mensaje' => 'required|min_length[10]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Por favor verifica los datos ingresados.',
                'errors' => $validation->getErrors()
            ]);
        }

        $nombre = $this->request->getPost('nombre');
        $email = $this->request->getPost('email');
        $telefono = $this->request->getPost('telefono');
        $empresa = $this->request->getPost('empresa');
        $asunto = $this->request->getPost('asunto');
        $mensaje = $this->request->getPost('mensaje');

        $emailService = \Config\Services::email();

        $emailService->setFrom($email, $nombre);
        $emailService->setTo('leapcol.soporte@gmail.com');
        $emailService->setSubject('Nuevo mensaje de contacto: ' . $asunto);

        $body = "Has recibido un nuevo mensaje desde el formulario de contacto:\n\n";
        $body .= "Nombre: $nombre\n";
        $body .= "Email: $email\n";
        $body .= "Teléfono: $telefono\n";
        $body .= "Empresa: $empresa\n";
        $body .= "Asunto: $asunto\n\n";
        $body .= "Mensaje:\n$mensaje";

        $emailService->setMessage($body);

        if ($emailService->send()) {
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Mensaje enviado correctamente'
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Error al enviar el mensaje. Por favor intenta más tarde.',
                // 'debug' => $emailService->printDebugger(['headers']) // Uncomment for debugging
            ]);
        }
    }
}
