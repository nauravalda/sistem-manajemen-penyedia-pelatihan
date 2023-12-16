<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login').view('footer');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = hash('sha256', $this->request->getPost('password'));

        $userModel = new \App\Models\UserModel();
        $user = $userModel->getUserByEmailAndPassword($email, $password);

        if ($user) {
            $session = session();
            $session->set('user', $user);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
