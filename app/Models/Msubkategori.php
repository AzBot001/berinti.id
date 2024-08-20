<?php

namespace App\Models;

use CodeIgniter\Model;

class Msubkategori extends Model
{
    protected $table            = 'subkategori';
    protected $primaryKey       = 'id_subkategori';
    protected $allowedFields    = ['id_kategori', 'nama_subkategori'];

    public function getAll()
    {
        $builder = $this->db->table('subkategori');
        $builder->join('kategori', 'kategori.id_kategori = subkategori.id_kategori');
        $query = $builder->get();
        return $query->getResult();
    }

    public function deletesubkategori($id_kategori)
    {
        $builder = $this->db->table('subkategori');
        $builder->where('id_kategori', $id_kategori);
        $query = $builder->delete();
    }

    public function getSubkategori($id_kategori)
    {
        $builder = $this->db->table('subkategori');
        $builder->whereIn('id_kategori', [$id_kategori]);
        $query = $builder->get();
        return $query;
    }
}
