<?php

namespace App\Controllers;

use App\Models\Mlabel;
use App\Models\Mberita;
use App\Models\Mkategori;
use App\Models\Msubkategori;

class Home extends BaseController
{
    protected $Mberita;
    protected $Mlabel;
    protected $Mkategori;
    protected $Msubkategori;
    public function __construct()
    {
        $this->Mberita = new Mberita();
        $this->Mlabel = new Mlabel();
        $this->Mkategori = new Mkategori();
        $this->Msubkategori = new Msubkategori();
    }
    public function index()
    {
        // $db = \Config\Database::connect();
        // $headline = $db->query('SELECT * FROM berita WHERE tgl_upload = CURDATE() ORDER BY jumlah_view DESC LIMIT 1')->getResult();
        $berita_terbaru = $this->Mberita->dataterbaru();
        $berita = $this->Mberita->getAll();
        $kategori = $this->Mkategori->get_categories();


        $data = [
            'tittle' => "Home Berinti.id",
            'kat' => $kategori,
            'ber' => $berita,
            'baru' => $berita_terbaru,
        ];
        return view('v_home', $data);
    }
    public function kategori()
    {
        $subkategori = $this->Msubkategori->getAll();
        $data = [
            'tittle' => "Kategori Berinti.id",
            'sub' => $subkategori
        ];
        return view('v_home_kategori', $data);
    }
    public function detail_berita()
    {

        return view('v_detail_berita');
    }
}
