<?php

namespace App\Controllers;

class SobreNosotros extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Leapcol - Sobre Nosotros'];
        return $this->renderView('sobre_nosotros/index', $data);
    }
}