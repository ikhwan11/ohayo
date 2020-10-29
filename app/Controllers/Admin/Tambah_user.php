<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Tambah_user extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola User'
        ];

        return view('admin/formTambahUser_view', $data);
    }
}
