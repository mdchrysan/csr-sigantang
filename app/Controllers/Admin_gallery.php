<?php

namespace App\Controllers;

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
        $gallery = $this->galleryModel->findAll();

        $data = [
            'title' => 'Admin | Sigantang',
            'photo' => $gallery,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/gallery/dashboard', $data);
    }

    public function save()
    {
        // photo validation
        if (!$this->validate([
            'photo' => [
                'rules' => 'max_size[photo,5120]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size'  => 'Ukuran foto terlalu besar.',
                    'is_image'  => 'Yang Anda pilih bukan gambar.',
                    'mime_in'   => 'Harap melampirkan ekstensi foto yang valid.',
                ]
            ]
        ])) {
            return redirect()->to('/photo-list')->withInput();
        }

        // manage photo
        $photoFile = $this->request->getFile('photo');
        if ($photoFile->getError() == 4) {
            session()->setFlashdata('required-msg', 'Harap memilih foto terlebih dahulu.');
            return redirect()->to('/photo-list');
        } else {
            $photoName = $photoFile->getRandomName();
            $photoFile->move('img', $photoName);
        }
        dd("debug sebelum save");

        // save photo
        $this->galleryModel->save([
            'filename' => $photoName,
            'status' => "dalam proses"
        ]);

        session()->setFlashdata('pesan', 'Foto berhasil ditambahkan.');
        return redirect()->to('/photo-list');
    }
}
