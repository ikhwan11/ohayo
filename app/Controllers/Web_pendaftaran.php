<?php

namespace App\Controllers;

class Web_pendaftaran extends BaseController
{
    public function index()
    {
        $course = 'Ohayo |';
        $data = [
            'tittle' => $course . ' Pendaftaran'
        ];

        return view('costumer/formPendaftaran_view', $data);
    }
}
