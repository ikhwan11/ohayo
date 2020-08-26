<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Jatuh_tempo extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Jatuh Tempo'
        ];

        return view('admin/jatuhTempo_view', $data);
    }
}
