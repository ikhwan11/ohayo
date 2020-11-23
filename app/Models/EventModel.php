<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table      = 'event_acara';
    protected $primaryKey = 'id_event';

    protected $allowedFields = ['judul_event', 'tanggal_acara', 'kategori_acara', 'tempat_acara', 'ket', 'detail_acara', 'biaya', 'limit_peserta', 'banner', 'status_acara'];

    public function search($keyword)
    {
        return $this->table('event_acara')->like('judul_event', $keyword);
    }

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_event' => $id])->first();
    }
}
