<?php

namespace App\Controllers;

class Admin_gallery extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Sigantang'
        ];
        return view('admin/gallery/dashboard', $data);
    }
}
