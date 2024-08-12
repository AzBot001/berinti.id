<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlabel extends Model
{
    protected $table            = 'label';
    protected $primaryKey       = 'id_label';
    protected $allowedFields    = ['nama_label'];
}
