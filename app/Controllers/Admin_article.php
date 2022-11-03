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
                'rules' => 'uploaded[photo]|max_size[photo,5120]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Foto artikel tidak boleh kosong.',
                    'max_size' => 'Ukuran foto terlalu besar.',
                    'is_image'  => 'Yang Anda pilih bukan gambar.',
                    'mime_in' => 'Harap melampirkan ekstensi foto yang valid.'
                ]
            ],
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/create-article')->withInput()->with('validation', $validation);
            return redirect()->to('/create-article')->withInput();
        }

        // manage photo - move it - take the filename - insert to db
        $photoFile = $this->request->getFile('photo');
        $photoFile->move('img');
        $photoName = $photoFile->getName();

        // create slug from title to be saved
        $slug = url_title($this->request->getVar('title'), '-', true);

        // save without id = create
        $this->articleModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'content' => $this->request->getVar('content'),
            'author' => $this->request->getVar('author'),
            'photo' => $photoName,
            'status' => "dalam proses"
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/article-list');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Artikel | Sigantang',
            'validation' => \Config\Services::validation(),
            'article' => $this->articleModel->getArticle($slug)
        ];
        return view('admin/article/edit', $data);
    }

    public function update($id)
    {
        // check title uniqueness when it's changed or not
        // slug based on hidden input
        $oldTitle = $this->articleModel->getArticle($this->request->getVar('slug'));
        $newTitle = $this->request->getVar('title');
        if ($oldTitle['title'] == $newTitle) {
            $titleRule = 'required';
        } else {
            $titleRule = 'required|is_unique[article.title]';
        }

        if (!$this->validate([
            'title' => [
                'rules' => $titleRule,
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
            // 'photo' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'Foto artikel tidak boleh kosong.',
            //         // 'ext_in' => 'Harap melampirkan ekstensi foto yang valid.'
            //     ]
            // ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/edit-article/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        //save with id = edit
        if ($this->request->getVar('photo') == '') {
            $this->articleModel->save([
                'id' => $id,
                'title' => $this->request->getVar('title'),
                'slug' => $slug,
                'content' => $this->request->getVar('content'),
                'author' => $this->request->getVar('author'),
                'status' => "dalam proses"
            ]);
        } else {
            $this->articleModel->save([
                'id' => $id,
                'title' => $this->request->getVar('title'),
                'slug' => $slug,
                'content' => $this->request->getVar('content'),
                'author' => $this->request->getVar('author'),
                'photo' => $this->request->getVar('photo'),
                'status' => "dalam proses"
            ]);
        }

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/article-list');
    }

    public function delete($id)
    {
        $this->articleModel->delete($id);
        session()->setFlashdata('pesan', 'Artikel berhasil dihapus.');
        return redirect()->to('/article-list');
    }
}
