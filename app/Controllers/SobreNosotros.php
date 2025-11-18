<?php

namespace App\Controllers;

class SobreNosotros extends BaseController
{
    public function index(): string
    {
        $title = 'Sobre Nosotros - Leapcol';
        return view('sobreNosotros', compact('title'));
    }
}
