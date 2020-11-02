<?php

namespace App\Controllers;

class Owner_dataPeserta extends BaseController
{
    public function index()
    {
        $corp = 'Owner |';
        $data = [
            'tittle' => $corp . ' Data peserta'
        ];

        return view('owner/dataPeserta_view', $data);
    }
}
