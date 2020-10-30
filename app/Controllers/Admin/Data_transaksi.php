<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Data_transaksi extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Data transaksi'
        ];

        return view('admin/dataTransaksi_view', $data);
    }
}
