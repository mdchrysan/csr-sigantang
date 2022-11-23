<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profil | Sigantang'
        ];
        return view('profile/index', $data);
    }
}
