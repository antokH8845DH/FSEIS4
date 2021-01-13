<?php

namespace App\Controllers;

use App\Models\ProvinceModel;

class Home extends BaseController
{
	public function index()
	{
		$ProvinceModel = new \App\Models\ProvinceModel();
		$provinces = $ProvinceModel->findAll();
		$data = [
			'title' => 'Home',
			'isi' => 'v_home',
			'province' => $provinces,
		];
		return view('layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

}
