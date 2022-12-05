<?php

namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\PublishedGalleryModel;

class Gallery extends BaseController
{
    public function index()
    {
        $galleryModel = new GalleryModel();
        $publishedModel = new PublishedGalleryModel();

        $published  = $publishedModel->findColumn('photos_id');
        $gallery    = $galleryModel->find($published);

        $data = [
            'title' => 'Galeri | Sigantang',
            'photo' => $gallery,
        ];

        return view('gallery/index', $data);
    }
}
