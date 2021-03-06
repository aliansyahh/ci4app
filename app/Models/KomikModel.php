<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table      = 'komik';

    protected $useTimestamps = true;

    public function getDataKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getJumlah()
    {
        $db = \Config\Database::connect();
        return $db->table('komik')->countAll();
    }
}