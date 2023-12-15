<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('navbar').view('dashboard').view('footer');
    }
}
