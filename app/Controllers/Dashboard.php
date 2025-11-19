<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $title = 'Inicio - Leapcol';
        return view('dashboard', compact('title'));
    }
}
