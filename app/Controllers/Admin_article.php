<?php

namespace App\Controllers;

class Admin_article extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Sigantang'
        ];
        return view('admin/article/dashboard', $data);
    }
}
