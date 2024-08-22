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
    public function get_subcategories()
    {
        $query = $this->db->table('subkategori')->get();
        $return = array();

        foreach ($query->getResult() as $category) {
            $return[$category->id_subkategori] = $category;
            $return[$category->id_subkategori]->subkategori = $this->get_sub_categories($category->id_subkategori);
        }

        return $return;
    }

    public function get_sub_categories($category_id)
    {
        $query = $this->db->table('berita');
        $query->where('id_subkategori', $category_id);
        return $query->get()->getResult();
    }
}
