<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index(): string
    {
        $title = 'Productos - Leapcol';
        return view('productos', compact('title'));
    }
}
