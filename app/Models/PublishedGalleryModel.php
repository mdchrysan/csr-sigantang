<?php

namespace App\Models;

use CodeIgniter\Model;

class PublishedGalleryModel extends Model
{
    protected $table      = 'published_photos';
    protected $primaryKey = 'published_id';
    protected $allowedFields = ['photos_id'];
}
