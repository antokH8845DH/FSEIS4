<?php

namespace App\Models;

use CodeIgniter\Model;

class CatInstrumentModel extends Model
{

    protected $table = 'tinstrument';
    protected $primaryKey = 'id_inst_name';
    protected $allowedFields = [
        'Instrument', 'Instrument_Name', 'Product', 'Supplier', 'Distributor', 'status_inst', 'id_child', 'Cat_number',
        'kd_child', 'kd_child_spart', 'kd_konsumabel'
    ];
    // protected $returnType = 'App\Entities\CategoryInstrument';
    protected $useTimestamps = false;
}
