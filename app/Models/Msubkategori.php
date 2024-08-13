<?php

namespace App\Models;

use CodeIgniter\Model;

class Msubkategori extends Model
{
    protected $table            = 'subkategori';
    protected $primaryKey       = 'id_subkategori';
    protected $allowedFields    = ['id_kategori','nama_subkategori'];

    public function getAll()
    {
        $builder = $this->db->table('subkategori');
        $builder->join('kategori', 'kategori.id_kategori = subkategori.id_kategori');
        $query = $builder->get();
        return $query->getResult();
    }
}
