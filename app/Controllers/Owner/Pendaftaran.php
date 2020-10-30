<?php

namespace App\Controllers\Owner;

use App\Controllers\BaseController;

class Pendaftaran extends BaseController
{
    public function index()
    {
        $corp = 'Owner |';
        $data = [
            'tittle' => $corp . ' Form tambah peserta'
        ];

        return view('owner/formPendaftaran_view', $data);
    }
}
