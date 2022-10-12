<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Galeri | Sigantang'
        ];
        return view('gallery/index', $data);
    }
}
