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
        // perPage parameter linked to number increment on views
        $gallery = $this->galleryModel->orderBy('created_at', 'DESC')->paginate(5, 'photos');
        $pager = $this->galleryModel->pager;

        // set default page if not stated
        $currentPage = $this->request->getVar('page_photos') ? $this->request->getVar('page_photos') : 1;

        $data = [
            'title'         => 'Admin | Sigantang',
            'photo'         => $gallery,
            'pager'         => $pager,
            'currentPage'   => $currentPage,
            'validation'    => \Config\Services::validation()
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
            return redirect()->to('/photo-list')->with('required-msg', 'Harap memilih foto terlebih dahulu.');
        } else {
            $photoName = $photoFile->getRandomName();
            $photoFile->move('img', $photoName);
        }

        // save photo
        $this->galleryModel->save([
            'filename' => $photoName,
            'status' => "dalam proses"
        ]);
        return redirect()->to('/photo-list')->with('pesan', 'Foto berhasil ditambahkan.');
    }

    public function delete($id)
    {
        $photo = $this->galleryModel->find($id);
        unlink('img/' . $photo['filename']);
        $this->galleryModel->delete($id);
        return redirect()->to('/photo-list')->with('pesan', 'Foto berhasil dihapus.');
    }
}
