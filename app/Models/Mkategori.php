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

    public function get_categories()
    {
        $query = $this->db->table('kategori')->get();
        $return = array();

        foreach ($query->getResult() as $category) {
            $return[$category->id_kategori] = $category;
            $return[$category->id_kategori]->subkategori = $this->get_sub_categories($category->id_kategori);
        }

        return $return;
    }


    public function get_sub_categories($category_id)
    {
        $query = $this->db->table('subkategori');
        $query->where('id_kategori', $category_id);
        return $query->get()->getResult();
    }
}
