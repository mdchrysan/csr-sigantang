<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Admin_article extends BaseController
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function index()
    {
        $article = $this->articleModel->findAll();
        // dd($article);

        $data = [
            'title' => 'Admin | Sigantang',
            'article' => $article
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
