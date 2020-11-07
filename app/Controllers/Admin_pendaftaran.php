<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;

class Admin_pendaftaran extends BaseController
{
    protected $pendaftaranModel;
    public function __construct()
    {
        $this->pendaftaranModel = new PendaftaranModel();
    }

    public function index()
    {
        $pendaftaran = $this->pendaftaranModel->findAll();
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Murid Terdaftar',
            'pendaftaran' => $pendaftaran
        ];

        return view('admin/pendaftaran_view', $data);
    }
}
