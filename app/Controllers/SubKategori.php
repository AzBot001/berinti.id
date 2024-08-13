<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mkategori;
use App\Models\Msubkategori;

class SubKategori extends BaseController
{
    protected $Mkategori;
    protected $Msubkategori;
    public function __construct()
    {
        $this->Mkategori = new Mkategori();
        $this->Msubkategori = new Msubkategori();
    }
    public function deletesubkategori()
    {

        $id_subkategori = $this->request->getVar('ids');
        $this->Msubkategori->delete($id_subkategori);
        session()->setFlashdata('hapus', 'Berkas Berhasil Dihapus');
        return redirect()->to(base_url('kategori'));
    }
}
