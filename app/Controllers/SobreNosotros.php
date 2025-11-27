<?php

namespace App\Controllers;

class SobreNosotros extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Sobre Nosotros - Leapcol'];
        return $this->renderView('sobre_nosotros/index', $data);
    }
}