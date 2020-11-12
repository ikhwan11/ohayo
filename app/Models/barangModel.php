<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id_barang';

    protected $allowedFields = ['nama_barang', 'nama_barang', 'jenis_barang', 'jumlah_barang'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_barang' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('barang')->like('nama_barang', $keyword);
    }
}
