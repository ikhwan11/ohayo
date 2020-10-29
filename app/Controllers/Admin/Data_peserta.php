<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Data_peserta extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Data Peserta'
        ];

        return view('admin/dataPeserta_view', $data);
    }
}
