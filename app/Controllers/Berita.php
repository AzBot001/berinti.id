<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mkategori;
use App\Models\Msubkategori;
use App\Models\Mlabel;

class Berita extends BaseController
{
    protected $Mkategori;
    protected $Msubkategori;
    protected $Mlabel;
    public function __construct()
    {
        $this->Mkategori = new Mkategori();
        $this->Msubkategori = new Msubkategori();
        $this->Mlabel = new Mlabel();
    }
    public function index()
    {
        $data = [
            'tittle' => 'Berita'
        ];
        return view('admin-pages/v_berita', $data);
    }

    public function v_tambahberita()
    {
        $kategori = $this->Mkategori->findAll();
        $subkateg = $this->Msubkategori->getAll();
        $label = $this->Mlabel->findAll();
        $data = [
            'tittle' => 'Berita',
            'kat' => $kategori,
            'subkat' => $subkateg,
            'label' => $label
        ];
        return view('admin-pages/v_tambah_berita', $data);
    }
}
