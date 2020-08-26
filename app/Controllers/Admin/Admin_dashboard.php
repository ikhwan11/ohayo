<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin_dashboard extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Dashboard'
        ];

        return view('admin/dashboardAdmin_view', $data);
    }
}
