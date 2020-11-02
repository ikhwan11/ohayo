<?php

namespace App\Controllers;

class Peserta_galeri extends BaseController
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
