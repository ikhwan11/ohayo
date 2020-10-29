<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Form_pendaftaran extends BaseController
{
    public function index()
    {
        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Form Pendaftaran'
        ];

        return view('admin/form_pendaftaran_view', $data);
    }
}
