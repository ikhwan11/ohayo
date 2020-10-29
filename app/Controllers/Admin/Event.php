<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Event extends BaseController
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
