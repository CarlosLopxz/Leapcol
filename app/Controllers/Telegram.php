<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Telegram extends Controller
{
    private $botToken = '8313471636:AAEmKGdyik4PVuKh7ebizNsW_9c7zOKfQfA';
    private $chatId = '-1003407693613';

    public function sendMessage()
    {
        $message = $this->request->getPost('message');
        $contact = $this->request->getPost('contact');

        if (empty($message)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'El mensaje no puede estar vacío.']);
        }

        $fullMessage = "📩 *Nuevo mensaje desde la web:*\n\n";
        $fullMessage .= "👤 *Contacto:* " . ($contact ?: 'Anónimo') . "\n";
        $fullMessage .= "💬 *Mensaje:* " . $message;

        $url = "https://api.telegram.org/bot{$this->botToken}/sendMessage";
        $data = [
            'chat_id' => $this->chatId,
            'text' => $fullMessage,
            'parse_mode' => 'Markdown'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($result, true);

        if ($response && $response['ok']) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Mensaje enviado correctamente.']);
        } else {
            // Log error for debugging if needed
            return $this->response->setJSON(['status' => 'error', 'message' => 'Error al enviar el mensaje. Asegúrate de que el bot esté configurado.']);
        }
    }
}
