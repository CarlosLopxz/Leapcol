<?php

namespace App\Controllers;

class SobreNosotros extends BaseController
{
    public function index(): string
    {
        $title = 'Sobre Nosotros - Leapcol';
        return view('sobre_nosotros/index', compact('title'));
    }
}