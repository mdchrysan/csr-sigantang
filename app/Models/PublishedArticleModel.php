<?php

namespace App\Models;

use CodeIgniter\Model;

class PublishedArticleModel extends Model
{
    protected $table      = 'published_article';
    protected $primaryKey = 'published_id';
    protected $allowedFields = ['article_id'];
}
