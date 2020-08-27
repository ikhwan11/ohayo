<?php

namespace App\Controllers\Murid;

use App\Controllers\BaseController;

class Murid_dashboard extends BaseController
{
    public function index()
    {
        $corp = 'Nama siswa |';
        $data = [
            'tittle' => $corp . ' Dashboard'
        ];

        return view('murid/murid_dashboard_view', $data);
    }
}
