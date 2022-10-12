<?php

namespace App\Controllers;

class Article extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Artikel | Sigantang'
        ];
        return view('article/index', $data);
    }

    public function details()
    {
        $data = [
            'title' => 'Artikel | Sigantang'
        ];
        return view('article/details', $data);
    }
}
