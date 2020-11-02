<?php

namespace App\Controllers;

class Admin_manajemenArtikel extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Manajemen Artikel'
        ];

        return view('admin/manajemenArtikel_view', $data);
    }
}
