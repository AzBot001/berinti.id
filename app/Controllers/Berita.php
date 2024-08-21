<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mkategori;
use App\Models\Msubkategori;
use App\Models\Mlabel;
use App\Models\MberitaLabel;
use App\Models\Mpegawai;
use App\Models\Mberita;

class Berita extends BaseController
{
    protected $Mkategori;
    protected $Msubkategori;
    protected $Mlabel;
    protected $MberitaLabel;
    protected $Mpegawai;
    protected $Mberita;
    public function __construct()
    {
        $this->Mkategori = new Mkategori();
        $this->Msubkategori = new Msubkategori();
        $this->Mlabel = new Mlabel();
        $this->MberitaLabel = new MberitaLabel();
        $this->Mpegawai = new Mpegawai();
        $this->Mberita = new Mberita();
    }
    public function index()
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {
            $berita_label = $this->MberitaLabel->getAll();
            $berita = $this->Mberita->findAll();
            $beritajoin = $this->Mberita->getAll();
            $data = [
                'tittle' => 'Berita',
                'ber' => $berita,
                'lb' => $berita_label,
                'berjoin' => $beritajoin
            ];
            return view('admin-pages/v_berita', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
    }

    public function v_tambahberita()
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {

            $kategori = $this->Mkategori->findAll();
            $berita = $this->Mberita->getAll();
            $pegawai = $this->Mpegawai->findAll();
            $subkateg = $this->Msubkategori->getAll();
            $label = $this->Mlabel->findAll();
            $data = [
                'tittle' => 'Berita',
                'kat' => $kategori,
                'subkat' => $subkateg,
                'peg' => $pegawai,
                'label' => $label,
                'ber' => $berita,

            ];
            return view('admin-pages/v_tambah_berita', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
    }

    public function save_berita()
    {
        if (!$this->validate([
            'thumb' => [
                'rules' => 'is_image[thumb]|mime_in[thumb,image/jpg,image/jpeg,image/gif,image/png]|max_size[thumb,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $Berkasfoto = $this->request->getFile('thumb');
        // jika form foto kosong
        if ($Berkasfoto->getError() == 4) {
            $filefoto = 'img01.jpg';
        } else {
            $filefoto = $Berkasfoto->getName();
            $Berkasfoto->move('thumbnail/', $filefoto);
        }
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->Mberita->save([
            'slug' => $slug,
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'gambar' => $filefoto,
            'caption' => $this->request->getVar('capt'),
            'jumlah_view' => 0,
            'tgl_upload' => date('Y-m-d'),
            'id_subkategori' => $this->request->getVar('kateg'),
            'id_pegawai' => $this->request->getVar('peg'),
        ]);
        $id_b = $this->Mberita->getLastID();
        $id_l = $this->request->getVar('label');
        $jml = count($id_l);
        // $jml = count($a);
        for ($i = 0; $i < $jml; $i++) {
            $this->MberitaLabel->save([
                'id_berita' => $id_b,
                'id_label' => $id_l[$i]
            ]);
        }
        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');
        return redirect()->to('berita');
    }

    public function v_updateberita($id_berita)
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {
            $berita_label = $this->MberitaLabel->getAll();
            $berita = $this->Mberita->where(['id_berita' => $id_berita])->get()->getResult();
            $kategori = $this->Mkategori->findAll();
            $pegawai = $this->Mpegawai->findAll();
            $subkateg = $this->Msubkategori->getAll();
            $label = $this->Mlabel->findAll();
            $data = [
                'tittle' => 'Berita',
                'kat' => $kategori,
                'subkat' => $subkateg,
                'peg' => $pegawai,
                'label' => $label,
                'ber' => $berita,
                'lb' => $berita_label
            ];
            return view('admin-pages/v_edit_berita', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
    }

    public function actedit_updateberita($id_berita)
    {
        if (!$this->validate([
            'thumb' => [
                'rules' => 'is_image[thumb]|mime_in[thumb,image/jpg,image/jpeg,image/gif,image/png]|max_size[thumb,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $Berkasfoto = $this->request->getFile('thumb');
        $berkass = $this->request->getVar('tl');
        // cek gambar apakah tetap gambar lama
        if ($Berkasfoto->getError() == 4) {
            $filefoto = $this->request->getVar('tl');
        } else {
            $filefoto = $Berkasfoto->getName();
            $Berkasfoto->move('thumbnail/', $filefoto);
            //hapus file yang lama
            $a = $this->Mberita->find($id_berita);
            if ($a['foto'] != 'img01.jpg') {
                unlink('foto/' . $berkass);
            }
        }
        $this->Mberita->save([
            'id_berita' => $id_berita,
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'gambar' => $filefoto,
            'caption' => $this->request->getVar('capt'),
            'id_subkategori' => $this->request->getVar('kateg'),
        ]);

        // hapus dahulu tabel berita label
        $this->MberitaLabel->delete($id_berita);
        //input kembali label berita yang baru

        $id_l = $this->request->getVar('label');
        $jml = count($id_l);
        for ($i = 0; $i < $jml; $i++) {
            $this->MberitaLabel->save([
                'id_berita' => $id_berita,
                'id_label' => $id_l[$i]
            ]);
        }

        session()->setFlashdata('pesan', 'Data Berhasil Diedit');
        return redirect()->to('berita');
    }
    public function deleteber($id_berita)
    {
        $this->Mberita->delete($id_berita);
        $id_bl = $this->request->getVar('id');
        $jml = count($id_bl);
        for ($i = 0; $i < $jml; $i++) {
            $this->MberitaLabel->delete($id_bl[$i]);
        }
        session()->setFlashdata('hapus', 'Berkas Berhasil Dihapus');
        return redirect()->to(base_url('berita'));
    }

    //function edit status headline
    public function status_beritahead($id_berita)
    {
        $headline = $this->Mberita->where(['status_head' => 1])->get()->getNumRows();
        if ($headline >= 4) {
            session()->setFlashdata('pesangagal', 'Headline Sudah Empat Kali Dipilih');
            return redirect()->to('berita');
        } else {
            $this->Mberita->save([
                'id_berita' => $id_berita,
                'status_head' => 1
            ]);
            session()->setFlashdata('pesan', 'Headline Berhasil Ditambahkan');
            return redirect()->to('berita');
        }
    }

    //function edit status headline terubah menjadi 0
    public function status_kembali_beritahead($id_berita)
    {
        $this->Mberita->save([
            'id_berita' => $id_berita,
            'status_head' => 0
        ]);
        session()->setFlashdata('pesan', 'Headline Berhasil Dihapus');
        return redirect()->to('berita');
    }
}
