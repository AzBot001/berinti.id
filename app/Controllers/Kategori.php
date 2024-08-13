<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mkategori;
use App\Models\Msubkategori;

class Kategori extends BaseController
{
    protected $Mkategori;
    protected $Msubkategori;
    public function __construct()
    {
        $this->Mkategori = new Mkategori();
        $this->Msubkategori = new Msubkategori();
    }
    public function index()
    {
        $coba = $this->Mkategori->findAll();
        foreach ($coba as $d) {
        }
        //panggil di tabel
        $rkategori = $this->Mkategori->findAll();
        $m = $this->Mkategori->where("id_kategori")->first();;
        $rks = $this->Msubkategori->getAll();

        $data = [
            'tittle' => 'Kategori',
            'rk' => $rkategori,
            'rk_s' => $rks
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
    public function save()
    {
        $this->Mkategori->save([
            'nama_kategori' => $this->request->getVar('nama_kategori'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');
        return redirect()->to('kategori');
    }
}
