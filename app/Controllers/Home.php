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
        $munculkota = $this->Mberita->kotamuncul();
        $munculkiribawahnusantara = $this->Mberita->kiribawah2();
        $berita_terbaru = $this->Mberita->dataterbaru();
        $berita_headline = $this->Mberita->headline();
        // $kategori = $this->Mkategori->findAll();
        $subkategori = $this->Msubkategori->getAll();
        // $berita = $this->Mberita->getAll2();
        $kategori = $this->Mkategori->get_categories();
        $allkategori = $this->Mberita->showAllKategori();


        $data = [
            'tittle' => "Home Berinti.id",
            'kat' => $kategori,
            'kat2' => $allkategori,
            'head' => $berita_headline,
            'muncul2' => $berita_terbaru,
            'muncul3' => $munculkiribawah1,
            'munculkotas' => $munculkota,
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
            'showcategories' => $show,
            'topcategories' => $munculberitatop,
            'id_kategori' => $id_kategori  // Mengirim id_kategori ke view
        ];
        return view('v_home_kategori', $data);
    }

    public function sub_kategori($id_subkategori)
    {
        $munculberitatop = $this->Mberita->beritatop();
        $kategori = $this->Mkategori->get_categories();
        $suber = $this->Mberita->pangge_sub($id_subkategori);
        $subkategori = $this->Msubkategori->get_subcategories();
        $data = [
            'tittle' => "Sub Kategori Berinti.id",
            'sub' => $subkategori,
            'munculberitatop' => $munculberitatop,
            'kat' => $kategori,
            'panggesuber' => $suber,
            'id_subkategori' => $id_subkategori,

        ];
        return view('v_home_subkategori', $data);
    }

    public function detail_berita($slug)
    {
        // Ambil detail berita berdasarkan slug
        $detailberita = $this->Mberita->detailberita($slug);

        // Cek apakah berita ditemukan
        if ($detailberita) {
            // Update view count
            $this->Mberita->incrementViewCount($detailberita['id_berita']);
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
            $judulBerita = $detailberita['judul'];
            $deskripsi = substr($detailberita['isi'], 0, 150) . '..';
            $data = [

                'title' => $judulBerita,
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
        } else {
            // Jika berita tidak ditemukan, tampilkan error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function label($id_label)
    {
        // $label = $this->Mberita->pangge_label($id_label);
        // // echo "<pre>";
        // // print_r($label);
        // // echo "</pre>";
        $munculberitatop = $this->Mberita->beritatop();
        $kategori = $this->Mkategori->get_categories();
        $labelpang = $this->Mberita->pangge_label($id_label);
        $subkategori = $this->Msubkategori->get_subcategories();
        $label = $this->Mlabel->get_labels();
        $data = [
            'tittle' => "Sub Kategori Berinti.id",
            'sub' => $subkategori,
            'lab' => $label,
            'munculberitatop' => $munculberitatop,
            'kat' => $kategori,
            'labelpangge' => $labelpang,
            'id_label' => $id_label,

        ];
        return view('v_home_labels', $data);
    }
}
