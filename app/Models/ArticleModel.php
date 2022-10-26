<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table      = 'article';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'author', 'photo', 'status'];

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
}
