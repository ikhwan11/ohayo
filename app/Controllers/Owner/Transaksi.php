<?php

namespace App\Controllers\Owner;

use App\Controllers\BaseController;

class Transaksi extends BaseController
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
