<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mkategori;

class Kategori extends BaseController
{
    protected $Mkategori;
    public function __construct()
    {
        $this->Mkategori = new Mkategori();
    }
    public function index()
    {
        $rkategori = $this->Mkategori->findAll();
        $db = \Config\Database::connect();
        $rks = $db->query('SELECT * FROM kategori LEFT JOIN subkategori ON kategori.id_kategori = subkategori.id_kategori;')->getResult();
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
