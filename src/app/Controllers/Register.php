<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
        return view('register').view('footer');
    }

    public function register()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone_number' => $this->request->getPost('phone'),
            'password' => hash('sha256', $this->request->getPost('password')),
        ];

        $userModel = new \App\Models\UserModel();
        $userModel->insert($data);

        return redirect()->to('/login');
    }
}