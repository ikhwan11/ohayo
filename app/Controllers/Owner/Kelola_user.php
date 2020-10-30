<?php

namespace App\Controllers\Owner;

use App\Controllers\BaseController;

class Kelola_user extends BaseController
{
    public function index()
    {
        $corp = 'Owner |';
        $data = [
            'tittle' => $corp . ' Kelola user'
        ];

        return view('owner/kelolaUser_view', $data);
    }
}
