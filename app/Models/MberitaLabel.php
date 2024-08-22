<?php

namespace App\Models;

use CodeIgniter\Model;

class MberitaLabel extends Model
{
    protected $table            = 'berita_label';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_berita', 'id_label'];

    public function getAll()
    {
        $builder = $this->db->table('berita_label');
        $builder->join('berita', 'berita.id_berita = berita_label.id_berita');
        $builder->join('label', 'label.id_label = berita_label.id_label');
        $query = $builder->get();
        return $query->getResult();
    }
    public function deleteberitalabel($id_berita)
    {
        $builder = $this->db->table('berita_label');
        $builder->where('id_berita', $id_berita);
        $query = $builder->delete();
    }
}
