<?php

namespace App\Controllers;

class Admin_tambahStok extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola User'
        ];

        return view('admin/formTambahStok_view', $data);
    }
}
