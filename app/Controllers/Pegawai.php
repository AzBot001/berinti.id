<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mpegawai;

class Pegawai extends BaseController
{
    protected $Mpegawai;
    public function __construct()
    {
        $this->Mpegawai = new Mpegawai();
    }
    public function index()
    {
        $rpegawai = $this->Mpegawai->findAll();
        $data = [
            'tittle' => 'Pegawai',
            'rp' => $rpegawai
        ];
        return view('admin-pages/v_pegawai', $data);
    }

    public function v_tambah_pegawai()
    {
        $data = [
            'tittle' => 'Pegawai'
        ];
        return view('admin-pages/v_tambah_pegawai', $data);
    }
    
    public function save()
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $Berkasfoto = $this->request->getFile('foto');
        // jika form foto kosong
        if ($Berkasfoto->getError() == 4) {
            $filefoto = 'avatar-4.png';
        } else {
            $filefoto = $Berkasfoto->getRandomName();
            $Berkasfoto->move('foto/', $filefoto);
        }
        $this->Mpegawai->save([
            'nama_pegawai' => $this->request->getVar('nama_pegawai'),
            'jabatan' => $this->request->getVar('jabatan'),
            'nohp' => $this->request->getVar('nohp'),
            'foto' => $filefoto,
            'username' => $this->request->getVar('username'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Disimpan');
        return redirect()->to('pegawai');
    }

    public function deletepegawai($id_pegawai){
        //hapus laporan dan foto berdasarkan id
        $berkas = $this->Mpegawai->find($id_pegawai);
        // cek jika file laporannya dan foto default
        if ($berkas['foto'] != 'avatar-4.png') {
            unlink('foto/' . $berkas['foto']);
        }
        $this->Mpegawai->delete($id_pegawai);
        session()->setFlashdata('hapus', 'Berkas Berhasil Dihapus');
        return redirect()->to(base_url('pegawai'));
    }
}
