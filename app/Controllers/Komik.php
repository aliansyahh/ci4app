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
            'komik' => $this->dataKomik->getDataKomik(),
            'judul' => 'komik'
        ];
        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->dataKomik->getDataKomik($slug),
            'judul' => 'komik'
        ];

        return view('komik/detail', $data);
    }
}