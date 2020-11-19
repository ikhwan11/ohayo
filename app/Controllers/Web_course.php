<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\KelasLevelModel;
use App\Models\KelasEquipmentModel;

class Web_course extends BaseController
{
    public function __construct()
    {
        $this->KelasModel = new KelasModel();
        $this->KelasLevelModel = new KelasLevelModel();
        $this->KelasEquipmentModel = new KelasEquipmentModel();
    }
    public function index()
    {
        // kelas
        $query = $this->KelasModel->query("SELECT * FROM kelas WHERE id_kelas = '3'");

        $querya = $this->KelasLevelModel->query("SELECT * FROM kelas_equipment WHERE tipe_kelas = 'Manga'");
        $queryaa = $this->KelasEquipmentModel->query("SELECT * FROM kelas_level WHERE tipe_kelas = 'Manga'");

        $row = $query->getRow();
        $row1 = $querya->getResult();
        $row2 = $queryaa->getResult();

        $course = 'Course |';
        $data = [
            'tittle' => $course . ' Manga Class',
            'manga' => $row,
            'mangaa' => $row1,
            'mangaaa' => $row2

        ];

        return view('course/manga_view', $data);
    }

    public function painting()
    {
        $query = $this->KelasModel->query("SELECT * FROM kelas WHERE id_kelas = '2'");

        $querya = $this->KelasLevelModel->query("SELECT * FROM kelas_equipment WHERE tipe_kelas = 'Painting'");
        $queryaa = $this->KelasEquipmentModel->query("SELECT * FROM kelas_level WHERE tipe_kelas = 'Painting'");

        $row = $query->getRow();
        $row1 = $querya->getResult();
        $row2 = $queryaa->getResult();

        $course = 'Course |';
        $data = [
            'tittle' => $course . ' Painting Class',
            'painting' => $row,
            'paintingg' => $row1,
            'paintinggg' => $row2
        ];

        return view('course/painting_view', $data);
    }

    public function digital()
    {
        $query = $this->KelasModel->query("SELECT * FROM kelas WHERE id_kelas = '1'");

        $querya = $this->KelasLevelModel->query("SELECT * FROM kelas_equipment WHERE tipe_kelas = 'Digital Art'");
        $queryaa = $this->KelasEquipmentModel->query("SELECT * FROM kelas_level WHERE tipe_kelas = 'Digital Art'");

        $row = $query->getRow();
        $row1 = $querya->getResult();
        $row2 = $queryaa->getResult();

        $course = 'Course |';
        $data = [
            'tittle' => $course . ' Digital Art Class',
            'digital' => $row,
            'digitall' => $row1,
            'digitalll' => $row2
        ];

        return view('course/digital_view', $data);
    }

    public function crayon()
    {
        $query = $this->KelasModel->query("SELECT * FROM kelas WHERE id_kelas = '4'");

        $querya = $this->KelasLevelModel->query("SELECT * FROM kelas_equipment WHERE tipe_kelas = 'Crayon'");
        $queryaa = $this->KelasEquipmentModel->query("SELECT * FROM kelas_level WHERE tipe_kelas = 'Crayon'");

        $row = $query->getRow();
        $row1 = $querya->getResult();
        $row2 = $queryaa->getResult();

        $course = 'Course |';
        $data = [
            'tittle' => $course . ' Crayon Class',
            'crayon' => $row,
            'crayonn' => $row1,
            'crayonnn' => $row2
        ];

        return view('course/crayon_view', $data);
    }
}
