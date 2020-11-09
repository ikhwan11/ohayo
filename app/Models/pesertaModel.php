<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table      = 'peserta';
    protected $primaryKey = 'id_peserta';

    protected $allowedFields = ['id_peserta', 'nama', 'gender', 'tanggal_lahir', 'alamat', 'no_wa', 'usia', 'nama_ayah', 'nama_ibu', 'jenis_kursus', 'asal_sekolah', 'status', 'total_kelas'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_peserta' => $id])->first();
    }

    public function tot_aktif()
    {
        return $this->db->table('peserta')->countAll();
    }

    public function tot_cuti()
    {
        return $this->db->table('peserta')->countAll();
    }
}
