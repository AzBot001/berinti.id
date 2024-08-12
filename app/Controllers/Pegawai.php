<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pegawai extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Pegawai'
        ];
        return view('admin-pages/v_pegawai', $data);
    }

    public function insert()
    {
        $data = [
            'tittle' => 'Pegawai'
        ];
        return view('admin-pages/v_tambah_pegawai', $data);
    }
}
