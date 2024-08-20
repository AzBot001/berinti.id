<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mkategori;
use App\Models\Msubkategori;
use App\Models\mBERITA;

class SubKategori extends BaseController
{
    protected $Mkategori;
    protected $Msubkategori;
    protected $Mberita;
    public function __construct()
    {
        $this->Mkategori = new Mkategori();
        $this->Msubkategori = new Msubkategori();
        $this->Mberita = new Mberita();
    }

    public function deletesub($id_subkategori)
    {
        $berita = $this->Mberita->where('id_subkategori', $id_subkategori)->first();
        if ($berita) {
            return redirect()->back()->withInput()->with('gagalhapus', "Data Tidak Bisa Dihapus");
        } else {
            $this->Msubkategori->delete($id_subkategori);
            session()->setFlashdata('hapus', 'Berkas Berhasil Dihapus');
            return redirect()->to(base_url('kategori'));
        }
    }
}
