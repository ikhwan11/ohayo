<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Tambah_stok extends BaseController
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
