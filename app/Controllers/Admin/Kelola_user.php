<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kelola_user extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Kelola User'
        ];

        return view('admin/kelolaUser_view', $data);
    }
}
