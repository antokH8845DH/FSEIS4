<?php

namespace App\Models;

use CodeIgniter\Model;

class SparepartModel extends Model
{

    protected $table = 'tsparepart_change';
    protected $primaryKey = 'Id';
    protected $allowedFields = [
        'id_cust', 'id_cust_inst', 'surat_jalan', 'item', 'qty', 'date', 'lot', 'ed', 'note', 'regdate', 'active',
    ];
    protected $returnType = 'App\Entities\Customer';
    protected $useTimestamps = false;
}
