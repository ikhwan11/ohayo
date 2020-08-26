<?php

namespace App\Controllers\Costumer;

use App\Controllers\BaseController;

class Galeri extends BaseController
{
    public function index()
    {
        $corp = 'Ohayo |';
        $data = [
            'tittle' => $corp . ' Gallery'
        ];

        return view('galeri/galeri_view', $data);
    }
}
