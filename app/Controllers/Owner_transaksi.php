<?php

namespace App\Controllers;

class Owner_transaksi extends BaseController
{
    public function index()
    {
        $corp = 'Owner |';
        $data = [
            'tittle' => $corp . ' Data transaksi'
        ];

        return view('owner/transaksi_view', $data);
    }
}
