<?php

namespace App\Controllers;

class Courses extends BaseController
{
    public function index(): string
    {
        return view('navbar').view('courses').view('footer');
    }

    public function new(): string
    {
        return view('navbar').view('courses-new').view('footer');
    }

    public function detail(int $id): string
    {
        return view('navbar').view('courses-detail', ['id' => $id]).view('footer');
    }

    public function edit(int $id): string
    {
        return view('navbar').view('courses-edit', ['id' => $id]).view('footer');
    }
}