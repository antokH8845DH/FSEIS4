<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{

    protected $table = 'tcustomer2';
    protected $primaryKey = 'No';
    protected $allowedFields = [
        'Customer', 'Address', 'City', 'Province', 'Phone', 'Fax', 'ContactPerson', 'HP', 'Active', 'office', 'CustomerOISID'
    ];
    protected $returnType = 'App\Entities\Customer';
    protected $useTimestamps = false;


    // public function updateCustomer($data, $No)

    // {
    // print_r($data);
    // print_r($No);
    // exit();
    // $builder = $db->table('tcustomer2');
    // $builder->where('No', $No);
    // $builder->update($data);
    // $query = $this->update($data, array('No' => $No));
    // return $query;
    // }
}
