<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinceModel extends Model
{

    protected $table = 'tprovince';
    protected $primaryKey = 'Id';
    protected $allowedFields = [
        'Id', 'province', 'active',
    ];
    // public function getProvince()
    // {
    //     $builder = $this->db->table('tprovince');
    //     return $builder->get();
    // }

    protected $useTimestamps = false;
}
