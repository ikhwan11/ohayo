<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Transaksi_kelas extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Transaksi'
        ];

        return view('admin/transaksiKelas_view', $data);
    }
}
