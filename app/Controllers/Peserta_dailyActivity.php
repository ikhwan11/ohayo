<?php

namespace App\Controllers;

class Peserta_dailyActivity extends BaseController
{
    public function index()
    {
        $corp = 'Nama siswa |';
        $data = [
            'tittle' => $corp . ' My activity'
        ];

        return view('peserta/dailyActivity_view', $data);
    }
}
