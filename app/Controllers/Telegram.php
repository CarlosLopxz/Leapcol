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
            return $this->response->setJSON(['status' => 'error', 'message' => 'Error al enviar el mensaje.']);
        }
    }

    public function getMessages()
    {
        $lastUpdateId = $this->request->getGet('last_update_id') ?: 0;
        
        $url = "https://api.telegram.org/bot{$this->botToken}/getUpdates";
        $data = [
            'offset' => $lastUpdateId + 1,
            'limit' => 10
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($result, true);
        $messages = [];
        $newLastUpdateId = $lastUpdateId;

        if ($response && $response['ok'] && !empty($response['result'])) {
            foreach ($response['result'] as $update) {
                if (isset($update['message']) && 
                    $update['message']['chat']['id'] == $this->chatId &&
                    !$update['message']['from']['is_bot']) {
                    $messages[] = [
                        'text' => $update['message']['text'],
                        'from' => $update['message']['from']['first_name'] ?? 'Asesor',
                        'date' => $update['message']['date']
                    ];
                    $newLastUpdateId = $update['update_id'];
                }
            }
        }

        return $this->response->setJSON([
            'status' => 'success',
            'messages' => $messages,
            'last_update_id' => $newLastUpdateId
        ]);
    }
}
