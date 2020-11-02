<?php

namespace App\Controllers;

class Admin_dataPeserta extends BaseController
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
