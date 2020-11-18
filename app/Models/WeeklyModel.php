<?php

namespace App\Models;

use CodeIgniter\Model;

class WeeklyModel extends Model
{
    protected $table      = 'weekly_art';
    protected $primaryKey = 'id_art';

    protected $allowedFields = ['nama_peserta', 'judul_karya', 'keterangan', 'gambar', 'umur', 'kelas'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
