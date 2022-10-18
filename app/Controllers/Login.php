<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Admin | Sigantang'
        ];
        return view('login/login', $data);
    }
}
