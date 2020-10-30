<?php

namespace App\Controllers\Owner;

use App\Controllers\BaseController;

class Form_user extends BaseController
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
