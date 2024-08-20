<?php

namespace App\Models;

use CodeIgniter\Model;

class Mberita extends Model
{
    protected $table            = 'berita';
    protected $primaryKey       = 'id_berita';
    protected $allowedFields    = ['slug', 'judul', 'isi', 'gambar', 'caption', 'jumlah_view', 'tgl_upload', 'id_subkategori', 'id_pegawai'];

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
    public function cekrow() {}
}
