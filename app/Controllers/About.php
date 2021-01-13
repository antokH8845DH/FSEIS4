<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'About',
            'isi' => 'v_about'
        ];
        return view('layout/v_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
