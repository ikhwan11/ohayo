<?php

namespace App\Controllers\Costumer;

use App\Controllers\BaseController;

class Cost_about extends BaseController
{
    public function index()
    {
        $corp = 'Ohayo |';
        $data = [
            'tittle' => $corp . ' About Us'
        ];

        return view('costumer/about_view', $data);
    }
}
