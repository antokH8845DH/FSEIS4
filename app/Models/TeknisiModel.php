<?php

namespace App\Models;

use CodeIgniter\Model;

class TeknisiModel extends Model
{

    protected $table = 'tteknisi';
    protected $primaryKey = 'IDTek';
    protected $allowedFields = [
        'Teknisi', 'Active', 'TeknisiOISID'
    ];
    // protected $returnType = 'App\Entities\Customer';
    protected $useTimestamps = false;
}
