<?php

namespace App\Models;

use CodeIgniter\Model;

class EventPesertaModel extends Model
{
    protected $table      = 'event_peserta';
    protected $primaryKey = 'id_pes';

    protected $allowedFields = ['nama_peserta', 'usia', 'no_wa', 'bukti', 'judul_event'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function search($keyword)
    {
        return $this->table('event_peserta')->like('judul_event', $keyword);
    }
}
