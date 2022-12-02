<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\PublishedArticleModel;

class Admin_article extends BaseController
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->publishedModel = new PublishedArticleModel();
    }

    public function index()
    {
        // perPage parameter linked to number increment on views
        $article = $this->articleModel->orderBy('created_at', 'DESC')->paginate(5, 'article');
        $pager = $this->articleModel->pager;

        // set default page if not stated
        $currentPage = $this->request->getVar('page_article') ? $this->request->getVar('page_article') : 1;

        $data = [
            'title'         => 'Admin | Sigantang',
            'article'       => $article,
            'pager'         => $pager,
            'currentPage'   => $currentPage
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
                'rules' => 'max_size[photo,5120]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]',
                'errors' => [
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

        // manage photo
        $photoFile = $this->request->getFile('photo');
        if ($photoFile->getError() == 4) {
            $photoName = 'default.png';
        } else {
            // generate random filename
            $photoName = $photoFile->getRandomName();
            // move it
            $photoFile->move('img', $photoName);
        }

        // check selected category
        $selectedCategory = $this->request->getVar('category');
        if (is_null($selectedCategory)) {
            return redirect()->to('/create-article')->withInput()->with('selected-msg', 'Harap memilih kategori terlebih dahulu.');
        }

        // create slug from title to be saved
        $slug = url_title($this->request->getVar('title'), '-', true);

        // save without id = create
        $this->articleModel->save([
            'title'     => $this->request->getVar('title'),
            'slug'      => $slug,
            'content'   => $this->request->getVar('content'),
            'author'    => $this->request->getVar('author'),
            'category'  => $selectedCategory,
            'photo'     => $photoName,
            'status'    => "dalam proses"
        ]);

        return redirect()->to('/article-list')->with('pesan', 'Data berhasil ditambahkan.');
    }

    public function upload($id)
    {
        $article = $this->articleModel->find($id);
        try {
            $this->publishedModel->save([
                'article_id' => $article['id'],
            ]);
        } catch (\Exception $e) {
            return redirect()->to('/article-list')->with('pesan', 'Artikel telah dipublikasi sebelumnya.');
        }

        // change article's status ("Dalam proses" -> "Terpublikasi")
        // save with id = edit
        $this->articleModel->save([
            'id' => $id,
            'status' => "Terpublikasi",
        ]);

        // disable button edit on admin article list
        // ...

        return redirect()->to('/article-list')->with('pesan', 'Artikel berhasil dipublikasi.');
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
            'photo' => [
                'rules' => 'max_size[photo,5120]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran foto terlalu besar.',
                    'is_image'  => 'Yang Anda pilih bukan gambar.',
                    'mime_in' => 'Harap melampirkan ekstensi foto yang valid.'
                ]
            ],
        ])) {
            return redirect()->to('/edit-article' . $this->request->getVar('slug'))->withInput();
        }

        // manage photo
        $photoFile = $this->request->getFile('photo');
        // check the file
        if ($photoFile->getError() == 4) {
            // no new file uploaded
            // get from hidden form
            $photoName = $this->request->getVar('oldPhoto');;
        } else {
            // there's new file
            // generate random filename
            $photoName = $photoFile->getRandomName();
            // move it
            $photoFile->move('img', $photoName);
            // delete old file
            $oldPhoto = $this->request->getVar('oldPhoto');
            if ($oldPhoto != 'default.png') {
                unlink('img/' . $oldPhoto['photo']);
            }
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        //save with id = edit
        $this->articleModel->save([
            'id'        => $id,
            'title'     => $this->request->getVar('title'),
            'slug'      => $slug,
            'content'   => $this->request->getVar('content'),
            'author'    => $this->request->getVar('author'),
            'category'  => $this->request->getVar('category'),
            'photo'     => $photoName,
            'status'    => "dalam proses"
        ]);

        return redirect()->to('/article-list')->with('pesan', 'Data berhasil diubah.');
    }

    public function delete($id)
    {
        // find img based on id
        $article = $this->articleModel->find($id);
        // check img filename
        if ($article['photo'] != 'default.png') {
            // delete 
            unlink('img/' . $article['photo']);
        }
        $this->articleModel->delete($id);
        return redirect()->to('/article-list')->with('pesan', 'Artikel berhasil dihapus.');
    }
}
