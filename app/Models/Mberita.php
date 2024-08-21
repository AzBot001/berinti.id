<?php

namespace App\Models;

use CodeIgniter\Model;

class Mberita extends Model
{
    protected $table            = 'berita';
    protected $primaryKey       = 'id_berita';
    protected $allowedFields    = ['slug', 'judul', 'isi', 'gambar', 'caption', 'jumlah_view', 'tgl_upload', 'id_subkategori', 'id_pegawai', 'status_head'];

    public function getAll()
    {
        $builder = $this->db->table('berita');
        $builder->join('subkategori', 'subkategori.id_subkategori = berita.id_subkategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $query = $builder->get();
        return $query->getResult();
    }
    public function getLastID()
    {
        return $this->db->insertID();
    }
    public function headline()
    {
        $builder = $this->db->table('berita');
        $builder->join('subkategori', 'subkategori.id_subkategori = berita.id_subkategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->where('status_head', 1); // Filter untuk hari ini
        $builder->limit(4);
        $query = $builder->get();
        return $query->getResult();
    }

    public function dataterbaru()
    {
        $builder = $this->db->table('berita');
        $builder->join('subkategori', 'subkategori.id_subkategori = berita.id_subkategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->orderBy('id_berita', 'DESC'); // filter data terbaru
        $builder->limit(4);
        $query = $builder->get();
        return $query->getResult();
    }
    public function kiribawah1()
    {
        $builder = $this->db->table('berita');
        // $builder->join('subkategori', 'subkategori.id_subkategori = berita.id_subkategori');
        // $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        // $builder->orderBy('id_berita', 'DESC'); // filter data terbaru
        // $builder->limit(2);
        $builder->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->orderBy('id_berita', 'DESC'); // filter data terbaru
        $builder->where('kategori.id_kategori', 11); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $builder->limit(1);
        $query = $builder->get();
        return $query->getResult();
    }
    public function kiribawah2()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->orderBy('id_berita', 'DESC'); // filter data terbaru
        $builder->where('kategori.id_kategori', 10); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $builder->limit(1);
        $query = $builder->get();
        return $query->getResult();
    }

    public function tengahhulonthalo()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->orderBy('id_berita', 'DESC'); // filter data terbaru
        $builder->where('kategori.id_kategori', 1); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $builder->limit(1);
        $query = $builder->get();
        return $query->getResult();
    }

    public function tengahhulonthalo2()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->orderBy('id_berita', 'DESC'); // filter data terbaru
        $builder->where('kategori.id_kategori', 1); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function tengaholahraga()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->orderBy('id_berita', 'DESC'); // filter data terbaru
        $builder->where('kategori.id_kategori', 8); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $builder->limit(1);
        $query = $builder->get();
        return $query->getResult();
    }

    public function beritapopuler()
    {
        //menghitung tanggal 1 minggu yang lalu
        $oneWeekAgo = date('Y-m-d', strtotime('-1 week'));
        $builder = $this->db->table('berita');
        $builder->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->where('tgl_upload >=', $oneWeekAgo); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $builder->orderBy('jumlah_view', 'DESC'); // filter data terbaru
        $builder->limit(10);
        $query = $builder->get();
        return $query->getResult();
    }

    public function kisahgorontalo()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->orderBy('id_berita', 'DESC'); // filter data terbaru
        $builder->where('kategori.id_kategori', 9); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $builder->limit(1);
        $query = $builder->get();
        return $query->getResult();
    }
    public function gayahidup()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->orderBy('id_berita', 'DESC'); // filter data terbaru
        $builder->where('kategori.id_kategori', 12); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $builder->limit(3);
        $query = $builder->get();
        return $query->getResult();
    }
    public function detailberita($slug)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.id_berita, berita.judul, berita.caption, berita.isi, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai, pegawai.foto');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        // $builder->join('berita_label', 'berita_label.id_berita = berita.id_berita');
        // $builder->join('label', 'label.id_label = berita_label.id_label');
        $builder->where('berita.slug', $slug); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $builder->groupBy('berita.id_berita');
        $data = $builder->get()->getRowArray();


        // Ambil label terkait berita
        $labelBuilder = $this->db->table('berita_label');
        $labelBuilder->select('label.nama_label')
            ->join('label', 'label.id_label = berita_label.id_label')
            ->where('berita_label.id_berita', $data['id_berita']);
        $data['labels'] = $labelBuilder->get()->getResultArray();
        return $data;
    }

    public function beritatop()
    {
        //menghitung tanggal 1 minggu yang lalu
        $oneWeekAgo = date('Y-m-d', strtotime('-1 week'));
        $builder = $this->db->table('berita');
        $builder->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->where('tgl_upload >=', $oneWeekAgo); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $builder->orderBy('jumlah_view', 'DESC'); // filter data terbaru
        $builder->limit(6);
        $query = $builder->get();
        return $query->getResult();
    }
    public function lastetkategori($slug)
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.nama_kategori, pegawai.nama_pegawai');
        $builder->join('subkategori', 'berita.id_subkategori = subkategori.id_subkategori');
        $builder->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $builder->orderBy('id_berita', 'DESC'); // filter data terbaru
        $builder->where('berita.slug', $slug); // Ganti 'Olahraga' dengan nama kategori yang diinginkan
        $builder->limit(2);
        $query = $builder->get();
        return $query->getResult();
    }
}
