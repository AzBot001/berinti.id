<?php

namespace App\Models;

use CodeIgniter\Model;

class Mkategori extends Model
{
    protected $table            = 'kategori';
    protected $primaryKey       = 'id_kategori';
    protected $allowedFields    = ['nama_kategori'];

    public function getSubkategori()
    {
        $builder = $this->db->table('berita');
        $builder->join('subkategori', 'subkategori.id_subkategori = berita.id_subkategori');
        $builder->join('pegawai', 'pegawai.id_pegawai = berita.id_pegawai');
        $query = $builder->get();
        return $query->getResult();
    }
}
