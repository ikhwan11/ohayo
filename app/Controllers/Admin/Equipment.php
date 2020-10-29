<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Equipment extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola User'
        ];

        return view('admin/equipment_view', $data);
    }
}
