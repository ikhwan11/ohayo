<?php

namespace App\Controllers;

class Owner_kelolaUser extends BaseController
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
