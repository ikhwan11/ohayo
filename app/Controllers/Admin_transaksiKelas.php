<?php

namespace App\Controllers;

class Admin_transaksiKelas extends BaseController
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
