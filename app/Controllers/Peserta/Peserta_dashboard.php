<?php

namespace App\Controllers\Peserta;

use App\Controllers\BaseController;

class Peserta_dashboard extends BaseController
{
    public function index()
    {
        $corp = 'Nama siswa |';
        $data = [
            'tittle' => $corp . ' Dashboard'
        ];

        return view('peserta/peserta_dashboard_view', $data);
    }
}
