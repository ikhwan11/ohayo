<?php

namespace App\Controllers;

class Admin_kelolaUser extends BaseController
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
