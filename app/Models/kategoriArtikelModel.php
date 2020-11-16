<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriArtikelModel extends Model
{
    protected $table      = 'kategori_artikel';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama_kategori'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
