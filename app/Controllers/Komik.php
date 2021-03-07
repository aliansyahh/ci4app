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

    public function create()
    {

        $data = [
            'title' => 'Tambah Data Komik',
            'judul' => 'komik',
            'validation' => \Config\Services::validation()
        ];
        return view('komik/create', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} Harus Diisi.',
                    'is_unique' => '{field} Sudah Ada.'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('komik/create'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->dataKomik->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('/komik'));
    }
}