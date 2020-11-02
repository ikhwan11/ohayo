<?php

namespace App\Controllers;

class Admin_dataTransaksi extends BaseController
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
