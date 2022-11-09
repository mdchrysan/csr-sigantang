<?php

namespace App\Controllers;

use CodeIgniter\Database\Config;

use App\Models\GalleryModel;

class Admin_gallery extends BaseController
{
    protected $galleryModel;

    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
    }

    public function index()
    {
        // $db = \Config\Database::connect();
        // $gallery = $db->query("SELECT * FROM gallery");
        // foreach ($gallery->getResultArray() as $row) {
        //     d($row);
        // }
        $gallery = $this->galleryModel->findAll();
        dd($gallery);

        $data = [
            'title' => 'Admin | Sigantang',
        ];
        return view('admin/gallery/dashboard', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'photo' => 'max_size[photo,5120]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]',
            'errors' => [
                'max_size' => 'Ukuran foto terlalu besar.',
                'is_image'  => 'Yang Anda pilih bukan gambar.',
                'mime_in' => 'Harap melampirkan ekstensi foto yang valid.'
            ]
        ]));
    }
}
