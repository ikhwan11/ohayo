<?php

namespace App\Controllers;

class Owner_formUser extends BaseController
{
    public function index()
    {
        $corp = 'Owner |';
        $data = [
            'tittle' => $corp . ' Tambah user'
        ];

        return view('owner/formTambahUser_view', $data);
    }
}
