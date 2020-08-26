<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Artikel extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Artikel'
        ];

        return view('admin/artikel_view', $data);
    }
}
