<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpegawai extends Model
{
    protected $table            = 'pegawai';
    protected $primaryKey       = 'id_pegawai';
    protected $allowedFields    = ['nama_pegawai','jabatan','nohp','foto','username','pass'];
}
