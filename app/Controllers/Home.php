<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $title = 'Inicio - Leapcol';
        return view('home', compact('title'));
    }
}
