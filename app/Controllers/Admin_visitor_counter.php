<?php

namespace App\Controllers;

class Admin_visitor_counter extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Sigantang'
        ];
        return view('admin/visitor_counter/dashboard', $data);
    }
}
