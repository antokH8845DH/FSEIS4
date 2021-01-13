<?php

namespace App\Controllers;

class Auth extends BaseController
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
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function register()
    {
        // lakukan validasi untuk data yang di post
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            // cek data dengan rule di validation.php
            $validate = $this->validation->run($data, 'register');
            $errors = $this->validation->getErrors();
            // jika tidak ada error jalankan
            if (!$errors) {
                $userModel = new \App\Models\UserModel();
                $user =  new \App\Entities\User();

                $user->username = $this->request->getPost('username');
                $user->name = $this->request->getPost('name');
                $user->password = $this->request->getPost('password');

                $user->created_date = date("Y-m-d H:i:s");
                $userModel->save($user);

                $data = [
                    'title' => 'Login',
                    'isi' => 'v_login'
                ];
                return view('layout/v_wrapper', $data);
            }

            $this->session->setFlashData('errors', $errors);
        }
        $data1 = [
            'title' => 'Register',
            'isi' => 'v_register'
        ];
        return view('layout/v_wrapper', $data1);
    }

    public function login()
    {
        if ($this->request->getPost()) {
            //lakukan validasi untuk data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'login');
            $errors = $this->validation->getErrors();

            if ($errors) {
                // return view('login');
                $data1 = [
                    'title' => 'Login',
                    'isi' => 'v_login'
                ];
                return view('layout/v_login', $data1);
            }

            $userModel = new \App\Models\UserModel();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $userModel->where('username', $username)->first();

            if ($user) {
                $salt = $user->salt;

                if ($user->password !== md5($salt . $password)) {
                    $this->session->setFlashData('errors', ['Password Salah']);
                } else {
                    $sessData = [
                        'username' => $user->username,
                        'id' => $user->id,
                        'name' => $user->name,
                        'role' => $user->role,
                        'isLoggedIn' => TRUE,
                    ];
                    $this->session->set($sessData);
                    return redirect()->to(site_url('home/index'));
                }
            } else {
                $this->session->setFlashData('errors', ['User Tidak Ditemukan']);
            }
        }
        $data1 = [
            'title' => 'Login',
            'isi' => 'v_login'
        ];
        return view('layout/v_login', $data1);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(site_url('auth/login'));
    }
}
