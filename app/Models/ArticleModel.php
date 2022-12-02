<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table      = 'article';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'content', 'author', 'category', 'photo', 'status'];

    // protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    public function getArticle($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
