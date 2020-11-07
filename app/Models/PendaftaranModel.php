<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table      = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';

    protected $allowedFields = ['nama', 'gender', 'tanggal_lahir', 'alamat', 'no_wa', 'usia', 'nama_ayah', 'nama_ibu', 'jenis_kursus', 'asal_sekolah',];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
