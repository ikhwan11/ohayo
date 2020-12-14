<?php

namespace App\Controllers;

use App\Models\FeedbackModel;

class Admin_feedback extends BaseController
{
    protected $FeedbackModel;
    public function __construct()
    {
        $this->FeedbackModel = new FeedbackModel();
    }

    public function index()
    {

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Daftar feedback',
            'feedback' => $this->FeedbackModel->findAll()
        ];

        return view('admin/feedback/dataFeedback_view', $data);
    }

    public function detail($id)
    {

        $corp = 'Admin |';
        $data = [
            'tittle' => $corp . ' Daftar feedback',
            'feedback' => $this->FeedbackModel->find($id)
        ];

        return view('admin/feedback/detailFeedback_view', $data);
    }
}
