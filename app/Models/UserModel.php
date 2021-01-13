<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'username', 'password', 'salt', 'avatar', 'role', 'created_date'
    ];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamps = false;
}
