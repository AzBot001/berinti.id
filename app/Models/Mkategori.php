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

    public function get_categories2()
    {
        $query = $this->db->table('kategori')->get();
        $return = array();

        foreach ($query->getResult() as $category2) {
            $return[$category2->id_kategori] = $category2;
            $return[$category2->id_kategori]->subkategori = $this->get_sub_categories2($category2->id_kategori);
        }

        return $return;
    }


    public function get_sub_categories2($category_id2)
    {
        $query = $this->db->table('subkategori');
        $query->select('berita.id_berita, berita.judul, berita.tgl_upload, berita.gambar, kategori.id_kategori, berita.slug');
        $query->join('berita', 'berita.id_subkategori = berita.id_subkategori');
        $query->join('kategori', 'subkategori.id_kategori = kategori.id_kategori');
        $query->where('kategori.id_kategori', $category_id2);
        $query->limit(1);
        return $query->get()->getResult();
    }
}
