<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPendukungModel extends Model
{
    protected $table = "data_pendukung";
    protected $useTimestamps = false;

    protected $allowedFields = ['id_supplier', 'document'];
}
