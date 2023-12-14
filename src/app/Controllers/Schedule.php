<?php

namespace App\Controllers;

class Schedule extends BaseController
{
    public function index(): string
    {
        return view('navbar').view('schedule').view('footer');
    }
}