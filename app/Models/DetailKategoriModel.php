<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailKategoriModel extends Model
{
    protected $table = "detail_kategori";
    protected $useTimestamps = false;

    protected $allowedFields = ['id_supplier', 'id_kategori'];
}
