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

    public function create()
    {
        $data = [
            'title' => 'Tambah Artikel | Sigantang'
        ];
        return view('admin/article/create', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit Artikel | Sigantang'
        ];
        return view('admin/article/edit', $data);
    }
}
