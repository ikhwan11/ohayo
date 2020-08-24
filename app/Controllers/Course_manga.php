<?php

namespace App\Controllers;

class Course_manga extends BaseController
{
    public function index()
    {
        $course = 'Course |';
        $data = [
            'tittle' => $course . ' Manga Class'
        ];

        return view('course/manga_view', $data);
    }
}
