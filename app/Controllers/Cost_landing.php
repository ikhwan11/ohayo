<?php

namespace App\Controllers;

class Cost_landing extends BaseController
{
    public function index()
    {
        $corp = 'Ohayo |';
        $data = [
            'tittle' => $corp . ' Beranda'
        ];

        return view('costumer/landing_view', $data);
    }
}
