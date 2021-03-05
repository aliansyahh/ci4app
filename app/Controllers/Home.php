<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = ['title' => 'Dashboard', 'judulHalaman' => 'Halaman Dashboard'];
		// return view('welcome_message');
		return view('home/index', $data);
	}
}