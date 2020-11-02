<?php

namespace App\Controllers;

class Admin_formPendaftaran extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Form Pendaftaran'
        ];

        return view('admin/form_pendaftaran_view', $data);
    }
}
