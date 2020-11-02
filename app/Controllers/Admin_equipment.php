<?php

namespace App\Controllers;

class Admin_equipment extends BaseController
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
