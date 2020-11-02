<?php

namespace App\Controllers;

class Owner_dashboard extends BaseController
{
    public function index()
    {
        $corp = 'Owner |';
        $data = [
            'tittle' => $corp . ' Dashboard'
        ];

        return view('owner/dashboardOwner_view', $data);
    }
}
