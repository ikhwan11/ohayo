<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Murid_daftar extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Murid Terdaftar'
        ];

        return view('admin/muridDaftar_view', $data);
    }
}
