<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Model;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Admin | Sigantang'
        ];
        return view('login/login', $data);
    }

    public function auth()
    {
        $session = session();
        $model = new AdminModel();
        $id_number = $this->request->getVar('id_number');
        $password = $this->request->getVar('password');
        $data = $model->where('id_number', $id_number)->first();
        if ($data) {
            $pass = $data['password'];
        }
    }

    public function logout()
    {
    }
}
