<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kategori extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Kategori'
        ];
        return view('admin-pages/v_kategori', $data);
    }
    public function insert()
    {
        $data = [
            'tittle' => 'Kategori'
        ];
        return view('admin-pages/v_tambah_kategori', $data);
    }
}
