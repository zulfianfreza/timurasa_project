<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = "category";
    protected $useTimestamps = true;

    protected $allowedFields = ['name', 'status'];
}
