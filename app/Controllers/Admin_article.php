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
            'title' => 'Tambah Artikel | Sigantang',
            'validation' => \Config\Services::validation()
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
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[article.title]',
                'errors' => [
                    'required' => 'Judul tidak boleh kosong.',
                    'is_unique' => 'Judul ini telah terdaftar.'
                ]
            ],
            'content' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Konten artikel tidak boleh kosong.'
                ]
            ],
            'author' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Penulis artikel tidak boleh kosong.'
                ]
            ],
            'photo' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Foto artikel tidak boleh kosong.',
                    // 'ext_in' => 'Harap melampirkan ekstensi foto yang valid.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/create-article')->withInput()->with('validation', $validation);
        }

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
