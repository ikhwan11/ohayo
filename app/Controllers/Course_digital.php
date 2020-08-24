<?php

namespace App\Controllers;

class Course_digital extends BaseController
{
    public function index()
    {
        $course = 'Course |';
        $data = [
            'tittle' => $course . ' Manga Digital Art Class'
        ];

        return view('course/digital_view', $data);
    }
}
