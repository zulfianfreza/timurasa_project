<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = "supplier";
    protected $useTimestamps = true;

    protected $allowedFields = ['id_supplier', 'status'];

    // public function getSupplier(){
    //     $query = $this->db->table('supplier')
    //     ->join('')
    // }
}
