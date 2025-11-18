<?php

namespace App\Controllers;

class Contacto extends BaseController
{
    public function index(): string
    {
        $title = 'Contacto - Leapcol';
        return view('contacto/index', compact('title'));
    }
}
