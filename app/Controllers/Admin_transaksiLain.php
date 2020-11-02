<?php

namespace App\Controllers;

class Admin_transaksiLain extends BaseController
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
