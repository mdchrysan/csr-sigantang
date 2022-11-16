<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table      = 'photos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['filename', 'status'];

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
}
