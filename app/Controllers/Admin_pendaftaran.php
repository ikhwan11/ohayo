<?php

namespace App\Controllers;

class Admin_pendaftaran extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Murid Terdaftar'
        ];

        return view('admin/pendaftaran_view', $data);
    }
}
