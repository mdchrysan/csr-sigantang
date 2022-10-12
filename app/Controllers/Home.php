<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda | Sigantang'
        ];
        return view('home/index', $data);
    }
}
