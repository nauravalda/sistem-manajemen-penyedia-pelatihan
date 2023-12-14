<?php

namespace App\Controllers;

class Courses extends BaseController
{
    public function index(): string
    {
        return view('navbar').view('courses');
    }
}