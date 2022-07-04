<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailSupplierModel extends Model
{
    protected $table = "detail_supplier";
    protected $useTimestamps = false;

    protected $allowedFields = ['id_supplier', 'nama', 'email', 'no_telp', 'perusahaan', 'website_perusahaan', 'alamat', 'provinsi', 'kota', 'kode_pos', 'bidang_usaha'];
}
