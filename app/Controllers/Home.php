<?php

namespace App\Controllers;

use App\Models\Mlabel;

class Home extends BaseController
{
    public function index()
    {
        return view('v_home');
    }
    public function kategori()
    {
        return view('v_home_kategori');
    }
    public function detail_berita()
    {

        return view('v_detail_berita');
    }
}
