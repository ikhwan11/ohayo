<?php

namespace App\Controllers;

class Web_CourseDigital extends BaseController
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
