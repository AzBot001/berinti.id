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
        if (session()->has('logged_in') and session()->get('logged_in') == true) {
            $rlabel = $this->Mlabel->findAll();
            $data = [
                'tittle' => 'Label',
                'rl' => $rlabel

            ];
            return view('admin-pages/v_label', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
    }
    public function insert()
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {
            $data = [
                'tittle' => 'Label'
            ];
            return view('admin-pages/v_tambah_label', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
    }
    public function save()
    {
        $this->Mlabel->save([
            'nama_label' => $this->request->getVar('nl'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');
        return redirect()->to('label');
    }

    public function v_updateLabel($id_label)
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {

            $rlabel2 = $this->Mlabel->where(['id_label' => $id_label])->get()->getResult();
            $data = [
                'tittle' => 'Label',
                'rl2' => $rlabel2
            ];
            return view('admin-pages/v_edit_label', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
    }

    public function actedit_updateLabel($id_label)
    {

        $this->Mlabel->save([
            'id_label' => $id_label,
            'nama_label' => $this->request->getVar('nl')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('label');
    }

    public function deleteLabel($id_label)
    {

        $this->Mlabel->delete($id_label);
        session()->setFlashdata('hapus', 'Berkas Berhasil Dihapus');
        return redirect()->to(base_url('label'));
    }
}
