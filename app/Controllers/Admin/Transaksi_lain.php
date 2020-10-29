<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Transaksi_lain extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Transaksi'
        ];

        return view('admin/transaksiLain_view', $data);
    }
}
