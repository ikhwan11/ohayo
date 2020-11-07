<?php

namespace App\Controllers;

class Admin_formPendaftaran extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Tambah peserta'
        ];

        return view('admin/formPendaftaranOf_view', $data);
    }
}
