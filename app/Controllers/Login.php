<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mpegawai;


class Login extends BaseController
{
    protected $Mpegawai;
    public function __construct()
    {
        $this->Mpegawai = new Mpegawai();
    }
    public function index()
    {
        if (session()->has('logged_in') and session()->get('logged_in') == true) {
            return redirect()->back()->withInput()->with('pesanlogout', "Anda Harus Logout");
        } else {
            return view('v_login'); //
        }
    }

    public function proses()
    {
        $user = $this->request->getVar('username');
        $pass = $this->request->getVar('password');
        $dataus = $this->Mpegawai->where("username", $user)->first();
        if ($dataus) {
            if ($dataus['pass'] == password_verify($pass, $dataus['pass'])) {
                session()->set([
                    'id_pegawai' => $dataus['id_pegawai'],
                    'nama_pegawai' => $dataus['nama_pegawai'],
                    'username' => $dataus['username'],
                    'jabatan' => $dataus['jabatan'],
                    'logged_in' => true
                ]);
                session()->setFlashdata('pesanlogin', 'Anda Berhasil Login');
                return redirect()->to(base_url('dashboard'));
            } else {
                session()->setFlashdata('pesanlogin', 'Password yang anda Masukan salah');
                return redirect()->to(base_url('login_admin'));
            }
        }
        session()->setFlashdata('pesanlogin', 'Anda Tidak Terdaftar');
        return redirect()->to(base_url('login_admin'));
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login_admin'));
    }
}
