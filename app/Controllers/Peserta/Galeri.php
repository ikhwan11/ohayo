<?php

namespace App\Controllers\Peserta;

use App\Controllers\BaseController;

class Galeri extends BaseController
{
    public function index()
    {
        $corp = 'Nama siswa |';
        $data = [
            'tittle' => $corp . ' galeri'
        ];

        return view('peserta/galeri_view', $data);
    }
}
