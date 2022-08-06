<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function inicio()
    {
        return view('index');
    }

    public function login()
    {
        $username = $this->request->getPost('name');
        $password = $this->request->getPost('password');

        $user = new UserModel();

        $dataUser = $user->getUser($username);
        if (password_verify($password, $dataUser['password'])) {

            $data = [
                'user' => $dataUser['name'],
                'role' => $dataUser['role'],
                'password' => $dataUser['password']
            ];
            $session = session();
            $session->set($data);
            return redirect()->to(base_url() . route_to('welcome'));
        } else {
            return redirect()->to(base_url());
        }
    }

    public function exit()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }
}
