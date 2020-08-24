<?php

namespace App\Controllers;

class Course_painting extends BaseController
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
