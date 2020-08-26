<?php

namespace App\Controllers\Course;

use App\Controllers\BaseController;

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
