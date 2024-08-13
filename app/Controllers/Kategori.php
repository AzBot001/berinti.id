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
        //panggil di tabel
        $rkategori = $this->Mkategori->findAll();
        $m = $this->Mkategori->where("id_kategori")->first();;
        $rks = $this->Msubkategori->getAll();

        $data = [
            'tittle' => 'Kategori',
            'rk' => $rkategori,
            'rks' => $rks
        ];
        return view('admin-pages/v_kategori', $data);
    }
    public function insert()
    {
        $rsub = $this->Mkategori->findAll();
        $data = [
            'tittle' => 'Kategori',
            'rsub' => $rsub
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
    public function save_sub()
    {
        $this->Msubkategori->save([
            'id_kategori' => $this->request->getVar('id_kategori'),
            'nama_subkategori' => $this->request->getVar('nama_subkategori'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');
        return redirect()->to('kategori');
    }
    public function deletekategori($id_kategori)
    {

        $this->Mkategori->delete($id_kategori);
        $this->Msubkategori->delete($id_kategori);
        session()->setFlashdata('hapus', 'Berkas Berhasil Dihapus');
        return redirect()->to(base_url('kategori'));
    }

    public function v_updatekategori($id_kategori)
    {
        $skateg = $this->Msubkategori->getAll();
        $kat = $this->Mkategori->where(['id_kategori' => $id_kategori])->get()->getResult();
        $data = [
            'tittle' => 'Kategori',
            'kateg' => $kat,
            'skat' => $skateg
        ];
        return view('admin-pages/v_edit_kategori', $data);
    }

    public function actedit_updatekategori($id_kategori)
    {
        $this->Mkategori->save([
            'id_kategori' => $id_kategori,
            'nama_kategori' => $this->request->getVar('nama_kategori'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->to('kategori');
    }
    public function actedit_updatesubkategori($id_subkategori)
    {
        $this->Msubkategori->save([
            'id_subkategori' => $id_subkategori,
            'id_kategori' => $this->request->getVar('idkategori'),
            'nama_subkategori' => $this->request->getVar('namasubkategori')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->to('kategori');
    }
}
