<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mlabel;

class Label extends BaseController

{
    protected $Mlabel;
    public function __construct()
    {
        $this->Mlabel = new Mlabel();
    }
    public function index()
    {
        $rlabel = $this->Mlabel->findAll();
        $data = [
            'tittle' => 'Label',
            'rl' => $rlabel

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
    public function save()
    {
        $this->Mlabel->save([
            'nama_label' => $this->request->getVar('nl'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Disimpan');
        return redirect()->to('label');
    }

    public function deleteLabel($id_label)
    {

        $this->Mlabel->delete($id_label);
        session()->setFlashdata('hapus', 'Berkas Berhasil Dihapus');
        return redirect()->to(base_url('label'));
    }
}
