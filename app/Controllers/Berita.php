<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Berita extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Berita'
        ];
        return view('admin-pages/v_berita', $data);
    }
}
