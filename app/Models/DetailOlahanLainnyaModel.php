<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailOlahanLainnyaModel extends Model
{
    protected $table = "detail_olahan_lainnya";
    protected $useTimestamps = false;

    protected $allowedFields = ['id_supplier', 'id_olahan_lainnya'];
}
