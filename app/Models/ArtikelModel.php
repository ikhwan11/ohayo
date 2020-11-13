<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table      = 'artikel';
    protected $primaryKey = 'id_artikel';

    protected $allowedFields = ['nama_admin', 'judul', 'kategori', 'keterangan', 'isi', 'gambar',];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_artikel' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('kategori')->like('kategori', $keyword);
    }
}
