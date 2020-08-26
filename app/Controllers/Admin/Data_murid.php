<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Data_murid extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Data Murid'
        ];

        return view('admin/dataMurid_view', $data);
    }
}
