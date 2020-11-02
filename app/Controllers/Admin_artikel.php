<?php

namespace App\Controllers;

class Admin_artikel extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Artikel'
        ];

        return view('admin/artikel_view', $data);
    }
}
