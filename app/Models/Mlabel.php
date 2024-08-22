<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlabel extends Model
{
    protected $table            = 'label';
    protected $primaryKey       = 'id_label';
    protected $allowedFields    = ['nama_label'];

    public function get_labels()
    {
        $query = $this->db->table('label')->get();
        $return = array();

        foreach ($query->getResult() as $labels) {
            $return[$labels->id_label] = $labels;
            $return[$labels->id_label]->subkategori = $this->labelss($labels->id_label);
        }

        return $return;
    }

    public function labelss($label_id)
    {
        $query = $this->db->table('berita');
        $query->select('label.nama_label, label.id_label');
        $query->join('berita_label', 'berita_label.id_berita = berita.id_berita');
        $query->join('label', 'berita_label.id_label = label.id_label');
        $query->where('label.id_label', $label_id);
        return $query->get()->getResult();
    }
}
