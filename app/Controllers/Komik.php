<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $datakomik;

    public function __construct()
    {
        $this->dataKomik = new KomikModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman Komik',
            'komik' => $this->dataKomik->findAll(),
            'judul' => 'komik'
        ];
        return view('komik/index', $data);
    }
}