<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Admin | Sigantang',
            'validation' => \Config\Services::validation()
        ];
        return view('login/login', $data);
    }

    public function auth()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ]
        ])) {
            return redirect()->to('/login')->withInput();
        } else {
            $loginModel = new LoginModel();
            $users = $loginModel->findAll();
            $uname = $this->request->getPost('username');
            $upass = $this->request->getPost('password');

            // check user availability
            $checkUser = $loginModel->where('username', $uname)->first();
            if ($checkUser == null) {
                session()->setFlashdata('msg-user', 'username tidak terdaftar.');
                return redirect()->to('/login');
            } else {
                // check password
                $password = $checkUser['password'];
                if (password_verify($upass, $password)) {
                    // password correct
                    // save role & id user to session 
                    $save_session = [
                        'id' => $checkUser['id'],
                        'username' => $checkUser['username'],
                        'id_role' => $checkUser['roles_id']
                    ];
                    session()->set($save_session);
                    return redirect()->to('/article-list');
                } else {
                    // password wrong
                    session()->setFlashdata('msg-pass', 'password salah.');
                    return redirect()->to('/login');
                }
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
