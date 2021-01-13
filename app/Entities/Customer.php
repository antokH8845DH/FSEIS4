<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Customer extends Entity
{
    // kalo yg disimpan gambar
    // public function setGambar($sfile)
    // {
    //     $fileName = $sfile->getRandomName();
    //     $writePath = './uploads';
    //     $sfile->move($writePath, $fileName);
    //     $this->attributes['gambar'] = $fileName;
    //     return $this;
    // }
}
