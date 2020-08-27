<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Galeri extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola Gallery'
        ];

        return view('admin/galeri_view', $data);
    }
}
