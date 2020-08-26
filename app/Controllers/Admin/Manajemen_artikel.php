<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Manajemen_artikel extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Manajemen Artikel'
        ];

        return view('admin/manajemenArtikel_view', $data);
    }
}
