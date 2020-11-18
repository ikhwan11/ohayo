<?php

namespace App\Controllers;

use App\Models\WeeklyModel;

class Web_weeklyArt extends BaseController
{
    public function index()
    {
        $weeklyModel = new WeeklyModel();
        $course = 'Ohayo |';
        $data = [
            'tittle' => $course . ' Weekly Art',
            'weekly' => $weeklyModel->findAll()
        ];

        return view('costumer/weeklyArt_view', $data);
    }
}
