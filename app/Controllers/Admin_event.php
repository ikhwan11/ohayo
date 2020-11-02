<?php

namespace App\Controllers;

class Admin_event extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Transaksi'
        ];

        return view('admin/event_view', $data);
    }
}
