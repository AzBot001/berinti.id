<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mpegawai;
use App\Models\Mberita;
use App\Models\Mkategori;
use App\Models\Mlabel;



class Dashboard extends BaseController
{
    protected $Mpegawai;
    protected $Mberita;
    protected $Mkategori;
    protected $Mlabel;
    public function __construct()
    {
        $this->Mpegawai = new Mpegawai();
        $this->Mberita = new Mberita();
        $this->Mkategori = new Mkategori();
        $this->Mlabel = new Mlabel();
    }
    public function index()
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {
            $wartawan = $this->Mpegawai->where(['jabatan' => 'Wartawan'])->get()->getNumRows();
            $berita = $this->Mberita->countAll();
            $kat = $this->Mkategori->countAll();
            $lab = $this->Mlabel->countAll();
            $data = [
                'tittle' => 'Dashboard',
                'wartawan' => $wartawan,
                'berita' => $berita,
                'kategori' => $kat,
                'label' => $lab,

            ];
            return view('admin-pages/v_dashboard', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
    }
}
