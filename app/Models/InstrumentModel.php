<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrumentModel extends Model
{

    protected $table = 'tcustinst';
    protected $primaryKey = 'Id_custinst';
    protected $allowedFields = [
        'id_cust', 'KKNACB', 'Customer', 'Instrument', 'Instrument_Name', 'Serial_Number', 'Installed', 'Recall', 'Status', 'Comment', 'Note', 'Active',
        'office', 'tech1', 'tech2', 'mark', 'LastCalDate', 'LastCalDateValidUntil', 'LastCalCertificate', 'flg_print', 'LastQCDate', 'LastQCDateValidUntil',
        'LOT', 'ED', 'flg_QC', 'tech3', 'id_inst_name'
    ];
    protected $returnType = 'App\Entities\Customer';
    protected $useTimestamps = false;
}
