<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Home extends BaseController
{
	protected $dataKomik;
	public function __construct()
	{
		$this->dataKomik = new KomikModel();
	}

	public function index()
	{

		$data = [
			'title' => 'Dashboard',
			'judulHalaman' => 'Halaman Dashboard',
			'komik' => $this->dataKomik->getJumlah()
		];

		// return view('welcome_message');
		return view('home/index', $data);
	}
}