<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
    protected $table      = 'feedback';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'address', 'impression', 'message'];

    protected $useTimestamps = true;
}
