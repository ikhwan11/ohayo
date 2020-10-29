<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pendaftaran extends BaseController
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
