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

class Customer extends BaseController
{
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Login',
    //         'isi' => 'v_login'
    //     ];
    //     return view('layout/v_wrapper', $data);
    // }

    //--------------------------------------------------------------------
    protected $CustomerModel;
    protected $InstrumentModel;
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();

        $this->CustomerModel = new \App\Models\CustomerModel();
    }
    public function index()
    {
        $CustomerModel = new \App\Models\CustomerModel();

        // query customer aktif saja
        $customers = $CustomerModel->where('Active', 1)->findAll();

        // $data['product']  = $model->getProduct()->getResult();
        $ProvinceModel = new \App\Models\ProvinceModel();
        $provinces = $ProvinceModel->findAll();

        $data1 = [
            'title' => 'Customer',
            'isi' => 'customer/index',
            'customers' => $customers,
            'province' => $provinces,
        ];
        return view('layout/v_wrapper', $data1);
    }
    public function detail()
    {
        $CustomerModel = new \App\Models\CustomerModel();
        $No = $this->request->uri->getSegment(3);
        $customer = $CustomerModel->find($No);
        $id_cust = $No;

        $InstrumentModel = new \App\Models\InstrumentModel();
        $array = ['id_cust' => $No, 'Active' => '1'];
        $instruments = $InstrumentModel->where($array)->findAll();
        $array = ['id_cust' => $No, 'Active' => '0'];
        $instrumentna = $InstrumentModel->where($array)->findAll();

        $CatInstrumentModel = new CatInstrumentModel();
        $array2 = ['status_inst' => 'Y'];
        $CatInstrument = $CatInstrumentModel->where($array2)->findAll();

        $TechnicianModel = new TeknisiModel();
        $array3 = ['Active' => '1'];
        $Teknisi = $TechnicianModel->where($array3)->findAll();
        $ProvinceModel = new \App\Models\ProvinceModel();
        $provinces = $ProvinceModel->findAll();

        $data1 = [
            'title' => 'Detail Customer',
            'isi' => 'customer/view',
            'customer' => $customer,
            'instruments' => $instruments,
            'instna' => $instrumentna,
            'catinstrument' => $CatInstrument,
            'teknisi' => $Teknisi,
            'province' => $provinces,
            // 'customer' => $this->CustomerModel->getCustomer($No),
        ];
        return view('layout/v_wrapper', $data1);
    }
    public function create()
    {
        $ProvinceModel = new \App\Models\ProvinceModel();
        $province = $ProvinceModel->findAll();

        if ($this->request->getPost()) {
            //jika ada data yang di post
            $data = $this->request->getPost();
            $this->validation->run($data, 'customer');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $CustomerModel = new \App\Models\CustomerModel();
                $customer = new \App\Entities\Customer();
                $customer->fill($data);
                $customer->Active = '1';
                // print_r($customer);
                // exit();
                // $customer->created_date = date("Y-m-d H:i:s");

                // save menggunakan model customer
                $CustomerModel->save($customer);
                $id = $CustomerModel->insertID();

                // $segment = ['customer', 'view', $id];
                $segment = ['customer', 'detail', $id];

                return redirect()->to(site_url($segment));
            }
            $this->session->setFlashData('errors', $errors);
        }


        $data1 = [
            'title' => 'Tambah Customer',
            'isi' => 'customer/create',
            'province' => $province,
        ];
        return view('layout/v_wrapper', $data1);
    }
    public function update()
    {
        $No = $this->request->uri->getSegment(3);
        $CustomerModel = new \App\Models\CustomerModel();

        $customer = $CustomerModel->find($No); //cari data customer sesuai $No

        $data1 = [
            'title' => 'Update Customer',
            'isi' => 'customer/update',
            'customer' => $customer,
        ];
        return view('layout/v_wrapper', $data1);
    }
    public function delete()
    {
    }
    public function updateCustomer()
    {
        $CustomerModel = new CustomerModel();
        $No = $this->request->getPost('No');
        $customer = $CustomerModel->find($No);
        $data = $this->request->getPost();
        $CustomerModel->save($data);
        return redirect()->to(base_url('customer/index'));
    }
    public function detailInstrument()
    {
        $idInstrument = $this->request->uri->getSegment(3); //ambil id instrument customer

        $InstrumentModel = new InstrumentModel();
        // $array2 = ['id_custinst' => $idInstrument, 'Active' => '1'];
        $instrument = $InstrumentModel->find($idInstrument); //cari data dg id instrument customer
        // $cust = $instrument->findColumn('Customer');

        $AccesoriesModel =  new AccesoriesModel();
        $array = ['id_cust_inst' => $idInstrument, 'active' => 'Y'];
        $accesories = $AccesoriesModel->where($array)->findAll(); //cari data accersoris dari id instrument cutomer

        $SparepartModel = new SparepartModel();
        $array2 = ['id_cust_inst' => $idInstrument, 'active' => 'Y'];
        $sparepart = $SparepartModel->where($array2)->findAll();

        $ItemAccesoriesModel = new ItemAccesoriesModel();
        $active = 'Y';
        $item = $ItemAccesoriesModel->where('active', $active)->findAll();

        $data1 = [
            'title' => 'Detail Instrument',
            'isi' => 'customer/detail',
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
