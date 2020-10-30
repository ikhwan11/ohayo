<?php

namespace App\Controllers\Owner;

use App\Controllers\BaseController;

class Data_peserta extends BaseController
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
