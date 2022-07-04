<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        helper(['form']);
        return view('login');
    }

    public function login()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $this->userModel->where('username', $username)->first();
        if ($data) {
            $data_password = $data['password'];
            $verify_password = password_verify($password, $data_password);
            if ($verify_password) {
                $session_data = [
                    'name' => $data['name'],
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];

                $session->set($session_data);
                return redirect()->to(base_url('/admin'));
            } else {
                $session->setFlashdata('message', 'Wrong Password');
                return redirect()->to(base_url('/login'));
            }
        } else {
            $session->setFlashdata('message', 'Username not found');
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}
