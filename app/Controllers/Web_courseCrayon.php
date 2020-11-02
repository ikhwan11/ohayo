<?php

namespace App\Controllers;

class Web_courseCrayon extends BaseController
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
