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
        $muncultenggayahidup = $this->Mberita->gayahidup();
        $muncultengkisahgorontalo = $this->Mberita->kisahgorontalo();
        $muncultengberitapopuler = $this->Mberita->beritapopuler();
        $muncultengholahraga = $this->Mberita->tengaholahraga();
        $muncultenghulonthalo2 = $this->Mberita->tengahhulonthalo2();
        $muncultengahhulonthalo = $this->Mberita->tengahhulonthalo();
        $munculkiribawah1 = $this->Mberita->kiribawah1();
        $munculkiribawahnusantara = $this->Mberita->kiribawah2();
        $berita_terbaru = $this->Mberita->dataterbaru();
        $berita_headline = $this->Mberita->headline();
        // $kategori = $this->Mkategori->findAll();
        $subkategori = $this->Msubkategori->getAll();
        $berita = $this->Mberita->getAll();
        $kategori = $this->Mkategori->get_categories();


        $data = [
            'tittle' => "Home Berinti.id",
            'kat' => $kategori,
            'ber' => $berita,
            'head' => $berita_headline,
            'muncul2' => $berita_terbaru,
            'muncul3' => $munculkiribawah1,
            'munculnusantara' => $munculkiribawahnusantara,
            'munculhulonthalo' => $muncultengahhulonthalo,
            'munculhulonthalo2' => $muncultenghulonthalo2,
            'munculolahraga' => $muncultengholahraga,
            'munculberitapopuler' => $muncultengberitapopuler,
            'munculkisahgorontalo' => $muncultengkisahgorontalo,
            'munculgayahidup' => $muncultenggayahidup,
        ];
        return view('v_home', $data);
    }
    public function kategori($id_kategori)
    {
        $kategori = $this->Mkategori->get_categories();
        $subkategori = $this->Msubkategori->getAll();
        $show       = $this->Mberita->showKategori($id_kategori);
        $munculberitatop = $this->Mberita->beritatop();
        $data = [
            'tittle' => "Kategori Berinti.id",
            'sub' => $subkategori,
            'kat' => $kategori,
            'showcategories' => $show ,
            'topcategories'=>$munculberitatop,
            'id_kategori' => $id_kategori  // Mengirim id_kategori ke view
        ];
        return view('v_home_kategori', $data);
    }
    public function detail_berita($slug)
    {
        // $kategori = $this->Mkategori->findAll();

        $munculberitatop = $this->Mberita->beritatop();
        $kategori = $this->Mkategori->get_categories();
        $detailberita = $this->Mberita->detailberita($slug);
        $gz = $this->Mberita->gas($slug);
        // Jika berita ditemukan
        if ($gz) {
            $kategoriId = $gz->id_kategori; // ID kategori dari berita detail
            $currentId = $gz->id_berita;    // ID berita detail
            $latestBerita = $this->Mberita->getLatestByCategory($kategoriId, $currentId);
        } else {
            $latestBerita = []; // Jika berita tidak ditemukan
        }
        $beritaterbaru = $this->Mberita->beritaterbaru();
        $lastetkategori = $this->Mberita->getAll();
        $subkategori = $this->Msubkategori->getAll();
        $munculberitatop = $this->Mberita->beritatop();
        $kategori = $this->Mkategori->get_categories();
        $detailberita = $this->Mberita->detailberita($slug);
        $data = [
            'tittle' => 'Detail Berita',
            'kat' => $kategori,
            'detailB' => $detailberita,
            'munculberitatop' => $munculberitatop,
            'muncullastetkategori' => $lastetkategori,
            'subkat' => $subkategori,
            'allberita' => $lastetkategori,
            'terbaru' => $beritaterbaru,
            'latestBerita' => $latestBerita, // Menambahkan data berita terbaru
        
    ];

        return view('v_detail_berita', $data);
    }
}
