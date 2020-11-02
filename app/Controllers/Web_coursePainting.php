<?php

namespace App\Controllers;

class Web_coursePainting extends BaseController
{
    public function index()
    {
        $course = 'Course |';
        $data = [
            'tittle' => $course . ' Painting Class'
        ];

        return view('course/painting_view', $data);
    }
}
