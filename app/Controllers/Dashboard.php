<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mpegawai;



class Dashboard extends BaseController
{
    protected $Mpegawai;
    public function __construct()
    {
        $this->Mpegawai = new Mpegawai();
    }
    public function index()
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {
            $wartawan = $this->Mpegawai->where(['jabatan' => 'Wartawan'])->get()->getNumRows();
            $data = [
                'tittle' => 'Dashboard',
                'wartawan' => $wartawan
            ];
            return view('admin-pages/v_dashboard', $data);
        } else {
            session()->setFlashdata('pesanlogin', 'Anda Harus Login');
            return redirect()->to(base_url('login_admin'));
        }
    }
}
