<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin_dashboard extends BaseController
{
    public function index()
    {

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Dashboard',

        ];

        return view('admin/dashboardAdmin_view', $data);
    }
}
