<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Label extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Label'
        ];
        return view('admin-pages/v_label', $data);
    }
    public function insert()
    {
        $data = [
            'tittle' => 'Label'
        ];
        return view('admin-pages/v_tambah_label', $data);
    }
}
