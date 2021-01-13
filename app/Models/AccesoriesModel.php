<?php

namespace App\Models;

use CodeIgniter\Model;

class AccesoriesModel extends Model
{

    protected $table = 'taccesoris';
    protected $primaryKey = 'Id';
    protected $allowedFields = [
        'id_cust', 'id_cust_inst', 'sj', 'item', 'qty', 'date', 'sn', 'kondisi', 'note', 'dateinput', 'active', 'office'
    ];
    protected $returnType = 'App\Entities\Accesories';
    protected $useTimestamps = false;
}
