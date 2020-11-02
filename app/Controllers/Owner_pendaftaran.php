<?php

namespace App\Controllers;

class Owner_pendaftaran extends BaseController
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
