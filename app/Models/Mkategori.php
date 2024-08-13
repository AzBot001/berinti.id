<?php

namespace App\Models;

use CodeIgniter\Model;

class Mkategori extends Model
{
    protected $table            = 'kategori';
    protected $primaryKey       = 'id_kategori';
    protected $allowedFields    = ['nama_kategori'];

    public function getKategoriWithSubkategori()
    {
        return $this->db->table($this->table)
                        ->select('kategori.nama_kategori, subkategori.nama_subkategori')
                        ->join('subkategori', 'subkategori.id_kategori = kategori.id_kategori')
                        ->get()
                        ->getResultArray();
    }
}
