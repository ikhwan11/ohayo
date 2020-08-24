<?php

namespace App\Controllers;

class Course_crayon extends BaseController
{
    public function index()
    {
        $course = 'Course |';
        $data = [
            'tittle' => $course . ' Crayon Class'
        ];

        return view('course/crayon_view', $data);
    }
}
