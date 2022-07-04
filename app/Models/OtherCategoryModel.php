<?php

namespace App\Models;

use CodeIgniter\Model;

class OtherCategoryModel extends Model
{
    protected $table = "other_category";
    protected $useTimestamps = true;

    protected $allowedFields = ['name', 'status'];
}
