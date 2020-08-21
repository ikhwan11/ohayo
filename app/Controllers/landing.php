<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index()
    {
        return view('costumer/landing_view');
    }
}
