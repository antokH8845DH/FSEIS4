<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	// set rules register dan login
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'name' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required|min_length[5]',
		],
		'repeatPassword' => [
			'rules' => 'required|min_length[5]|matches[password]',
		],
	];

	public $register_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'name' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'repeatPassword' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
			'matches' => '{field} Tidak Match Dengan Password',
		],
	];
	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required|min_length[5]',
		],
	];
	public $login_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'name' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
	];
	public $customer = [
		'Customer' => [
			'rules' => 'required|min_length[1]',
		],
		'Address' => [
			'rules' => 'required|min_length[3]',
		],
		'City' => [
			'rules' => 'required|min_length[3]',
		],
		'Province' => [
			'rules' => 'required|min_length[1]',
		],
		// 'Phone' => [
		// 	'rules' => 'required|min_length[5]',
		// ],
	];
	public $customer_errors = [
		'Customer' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 1 Karakter'
		],
		'Address' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter'
		],
		'City' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 3 Karakter'
		],
		'Province' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter'
		],
		// 'Phone' => [
		// 	'required' => '{field} Harus Diisi',
		// 'min_length' => '{field} Minimal 1 Karakter'
		// ],
	];

	public $instrument = [
		'Instrument_Name' => [
			'rules' => 'required',
		],
		'Serial_Number' => [
			'rules' => 'required|min_length[5]',
		],
		'Teknisi' => [
			'rules' => 'required|min_length[3]',
		],
		'Installed' => [
			'rules' => 'required',
		],
		'Status' => [
			'rules' => 'required|min_length[1]',
		],
		'Mark' => [
			'rules' => 'required|min_length[1]',
		],
	];
	public $instrument_errors = [
		'Instrument_Name' => [
			'required' => '{field} Harus Diisi',
		],
		'Serial_Number' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter'
		],
		'Teknisi' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 3 Karakter'
		],
		'Installed' => [
			'required' => '{field} Harus Diisi',
		],
		'Status' => [
			'required' => '{field} Harus Diisi',
		],
		'Mark' => [
			'required' => '{field} Harus Diisi',
		],
	];
	public $accesories = [
		'date' => [
			'rules' => 'required',
		],
		'sj' => [
			'rules' => 'required|min_length[5]',
		],
		'item' => [
			'rules' => 'required|min_length[3]',
		],
		'sn' => [
			'rules' => 'required',
		],
		'qty' => [
			'rules' => 'required|is_natural',
		],
		'kondisi' => [
			'rules' => 'required|min_length[1]',
		],
	];
	public $accesories_errors = [
		'date' => [
			'required' => '{field} Harus Diisi',
		],
		'sj' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter'
		],
		'item' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 3 Karakter'
		],
		'sn' => [
			'required' => '{field} Harus Diisi',
		],
		'qty' => [
			'required' => '{field} Harus Diisi',
			'is_natural' => '{field} tidak boleh negatif',
		],
		'kondisi' => [
			'required' => '{field} Harus Diisi',
		],
	];
}
