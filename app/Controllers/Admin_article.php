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

        // if (empty($data['article'])) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel ' . $slug . ' tidak ditemukan.');
        // }

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

    public function save()
    {
        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->articleModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'content' => $this->request->getVar('content'),
            'author' => $this->request->getVar('author'),
            'photo' => $this->request->getVar('photo'),
            'status' => "dalam proses"
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/article-list');
    }
}
