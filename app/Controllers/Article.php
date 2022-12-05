<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\PublishedArticleModel;

class Article extends BaseController
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->publishedModel = new PublishedArticleModel();
    }

    public function index()
    {
        $published = $this->publishedModel->findColumn('article_id');
        $article = $this->articleModel->find($published);

        $data = [
            'title' => 'Artikel | Sigantang',
            'article' => $article
        ];

        return view('article/index', $data);
    }

    public function details($slug)
    {
        $data = [
            'title' => 'Artikel | Sigantang',
            'article' => $this->articleModel->getArticle($slug)
        ];

        if (empty($data['article'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan.');
        }

        return view('article/details', $data);
    }
}
