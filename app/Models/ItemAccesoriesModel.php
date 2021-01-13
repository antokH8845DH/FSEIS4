<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemAccesoriesModel extends Model
{

    protected $table = 'titem_install';
    protected $primaryKey = 'id_item';
    protected $allowedFields = [
        'item', 'unit', 'note', 'active'
    ];
    // protected $returnType = 'App\Entities\Customer';
    protected $useTimestamps = false;
}
