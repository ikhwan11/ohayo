<?php

namespace App\Models;

use CodeIgniter\Model;

class EventPesertaKonfirm extends Model
{
    protected $table      = 'event_pesertakonfirm';
    protected $primaryKey = 'id_pese';

    protected $allowedFields = ['nama_peserta', 'usia', 'no_wa', 'judul_event'];

    public function search($keyword)
    {
        return $this->table('event_pesertakonfirm')->like('judul_event', $keyword);
    }
}
