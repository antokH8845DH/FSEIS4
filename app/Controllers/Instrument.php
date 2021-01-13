<?php

namespace App\Controllers;

use App\Models\AccesoriesModel;
use App\Models\CatInstrumentModel;
use App\Models\CustomerModel;
use App\Models\InstrumentModel;
use App\Models\ItemAccesoriesModel;
use App\Models\SparepartModel;
use App\Models\TeknisiModel;
use App\Models\ProvinceModel;

class Instrument extends BaseController
{

    protected $CustomerModel;
    protected $InstrumentModel;
    protected $AccesoriesModel;
    protected $CatInstrumentModel;
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();

        $this->CustomerModel = new \App\Models\CustomerModel();
    }

    public function addInstrument()
    {
        if ($this->request->getPost()) {
            //jika ada data yang di post
            $data = $this->request->getPost();
            $this->validation->run($data, 'instrument');
            $errors = $this->validation->getErrors();
            // print_r($data);
            // exit();
            $inst = $this->request->getPost('Instrument_Name');
            $CatInstrumentModel = new \App\Models\CatInstrumentModel();
            // $catname = new \App\Entities\CategoryInstrument();
            // $inst = $instrument->Instrument_Name;
            $array = ['Instrument_Name' => $inst, 'status_inst' => 'Y'];
            $categori = $CatInstrumentModel->where($array)->findColumn('Instrument');
            // $instname = $categori->Instrument;

            // print_r($categori);
            // printf($instname);
            // exit();

            $InstrumentModel = new \App\Models\InstrumentModel();
            $instrument = new \App\Entities\Instrument(); // exit();
            $instrument->fill($data);
            $instrument->Active = '1';
            $instrument->Office = '0';
            $instrument->Instrument = $categori;
            // save menggunakan model customer
            $InstrumentModel->save($instrument);
            $id = $this->request->getPost('id_cust');
            $segment = ['customer', 'detail', $id];
            return redirect()->to(site_url($segment));
        }
        // $data1 = [
        //     'title' => 'Detail Instrument',
        //     'isi' => 'customer/detail',
        //     'customer' => $id,
        //'accesories' => $accesories,
        //'instrument' => $instrument,
        // 'customer' => $this->CustomerModel->getCustomer($No),
        // ];
        // return view('layout/v_wrapper', $data1);
    }
    public function addAccesories()
    {
        if ($this->request->getPost()) {
            //jika ada data yang di post
            $data = $this->request->getPost(); //ambil data post
            $this->validation->run($data, 'accesories'); //validasi input data
            $errors = $this->validation->getErrors();
            if (!$errors) {
                $AccesoriesModel = new \App\Models\AccesoriesModel();
                $Accesories = new \App\Entities\Accesories(); // exit();
                $Accesories->fill($data);
                $Accesories->active = 'Y';
                $Accesories->Office = 'N';
                // print_r($Accesories);
                // exit();
                // save menggunakan model accesories
                $AccesoriesModel->save($Accesories);
                $id = $this->request->getPost('id_cust_inst');
                $segment = ['customer', 'detailInstrument', $id];
                return redirect()->to(site_url($segment));
            }
            $this->session->setFlashData('errors', $errors);
        }
        $id = $this->request->getPost('id_cust_inst');
        $segment = ['customer', 'detailInstrument', $id];
        return redirect()->to(site_url($segment));
    }
    public function addAcc()
    {
        $idInstrument = $this->request->uri->getSegment(3); //ambil id instrument customer
        $InstrumentModel = new InstrumentModel();
        // $array2 = ['id_custinst' => $idInstrument, 'Active' => '1'];
        $instrument = $InstrumentModel->find($idInstrument); //cari data dg id instrument customer
        // $cust = $instrument->findColumn('Customer');

        $AccesoriesModel =  new AccesoriesModel();
        $array = ['id_cust_inst' => $idInstrument, 'active' => 'Y'];
        $accesories = $AccesoriesModel->where($array)->findAll(); //cari data accersoris dari id instrument cutomer

        $ItemAccesoriesModel = new ItemAccesoriesModel();
        $active = 'Y';
        $item = $ItemAccesoriesModel->where('active', $active)->findAll();
        $data1 = [
            'title' => 'Add Accesories',
            'isi' => 'instrument/addAccesories',
            'accesories' => $accesories,
            'instrument' => $instrument,
            'sparepart' => $sparepart,
            'item' => $item,
            'idcust' => $instrument->id_cust,
            // 'customer' => $this->CustomerModel->getCustomer($No),
        ];
        return view('layout/v_wrapper', $data1);
    }
}
