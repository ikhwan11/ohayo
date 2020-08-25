<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $corp = 'Ohayo |';
        $data = [
            'tittle' => $corp . ' Login'
        ];

        return view('login_view', $data);
    }
}
