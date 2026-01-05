<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $title = 'Leapcol - Inicio';
        return view('dashboard', compact('title'));
    }
}
