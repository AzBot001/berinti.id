<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mkategori;
use App\Models\Msubkategori;
use App\Models\Mberita;

class Kategori extends BaseController
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
    public function index()
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {
            //panggil di tabel
            $berita = $this->Mberita->getAll();
            $rkategori = $this->Mkategori->findAll();
            $m = $this->Mkategori->where("id_kategori")->first();;
            $rks = $this->Msubkategori->getAll();

            $data = [
                'tittle' => 'Kategori',
                'rk' => $rkategori,
                'rks' => $rks,
                'ber' => $berita
            ];
            return view('admin-pages/v_kategori', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
    }
    public function insert()
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {

            $rsub = $this->Mkategori->findAll();
            $data = [
                'tittle' => 'Kategori',
                'rsub' => $rsub
            ];
            return view('admin-pages/v_tambah_kategori', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
    }
    public function save()
    {
        $this->Mkategori->save([
            'nama_kategori' => $this->request->getVar('nama_kategori'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');
        return redirect()->to('tambah_kategori');
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
        // $id_berita = $this->request->getVar('id_berita');

        $idsubkategori = $this->request->getVar('id_sub');
        $berita = $this->Mberita->whereIn('id_subkategori', $idsubkategori)->first();

        if ($berita) {
            session()->setFlashdata('gagalhapus', 'Data Tidak Bisa Dihapus');
            return redirect()->to(base_url('kategori'));
        } else {
            $this->Msubkategori->deletesubkategori($id_kategori);
            $this->Mkategori->delete($id_kategori);
            session()->setFlashdata('berhasilhapus', 'Berkas Berhasil Dihapus');
            return redirect()->to(base_url('kategori'));
        }
    }

    public function v_updatekategori($id_kategori)
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {

            $skateg = $this->Msubkategori->where('id_kategori', $id_kategori)->get()->getResult();
            $kat = $this->Mkategori->where('id_kategori', $id_kategori)->get()->getResult();
            $data = [
                'tittle' => 'Kategori',
                'kateg' => $kat,
                'skat' => $skateg
            ];
            return view('admin-pages/v_edit_kategori', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
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
