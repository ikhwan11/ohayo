<?php

namespace App\Controllers;

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
